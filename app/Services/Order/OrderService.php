<?php

namespace App\Services\Order;

use App\Exceptions\Client\ClientNotFoundException;
use App\Exceptions\Order\OrderNotFoundException;
use App\Exceptions\Product\ProductNotFoundException;
use App\Interfaces\Repositories\Client\ClientRepositoryInterface;
use App\Interfaces\Repositories\Order\OrderRepositoryInterface;
use App\Interfaces\Repositories\OrderDetails\OrderDetailsRepositoryInterface;
use App\Interfaces\Repositories\Product\ProductRepositoryInterface;
use App\Interfaces\Services\Order\OrderServiceInterface;
use App\Mappers\Order\OrderDtoMapper;
use App\Mappers\Order\OrderViewDtoMapper;
use App\Mappers\OrderDetails\OrderDetailsDtoMapper;
use App\Mappers\Product\ProductUpdateStockDtoMapper;
use Illuminate\Http\Request;

class OrderService implements OrderServiceInterface
{
    protected $orderRepository;
    protected $productRepository;

    protected $orderDetailsRepository;
    protected $clientRepository;


    public function __construct(
        OrderRepositoryInterface $orderRepository,
        ProductRepositoryInterface $productRepository,
        OrderDetailsRepositoryInterface $orderDetailsRepository,
        ClientRepositoryInterface $clientRepository
    ) {
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
        $this->orderDetailsRepository = $orderDetailsRepository;
        $this->clientRepository = $clientRepository;
    }


    public function storeOrder(Request $request): int
    {
        $cart = $request->input('cart');

        $this->validateCartItems($cart);

        $order_id = $this->createOrder($request->input('clientId'));

        throw_if(
            !$order_id,
            new OrderNotFoundException(message: 'Error al crear la orden')
        );

        $this->processCartItems($cart, $order_id);

        return $order_id;
    }

    private function validateCartItems(array $cart): void
    {
        foreach ($cart as $item) {
            $product = $this->productRepository->getById($item['id']);

            throw_if(
                !$product,
                new ProductNotFoundException()
            );

            throw_if(
                $product->stock < $item['quantity'],
                new ProductNotFoundException(message: 'Stock insuficiente para ' . $product->name, code: 422)
            );
        }
    }

    private function createOrder(int $clientId): int
    {
        $client = $this->clientRepository->getById($clientId);

        throw_if(
            !$client,
            new ClientNotFoundException()
        );

        $dto = (new OrderDtoMapper)->createFromRequest($clientId);

        return $this->orderRepository->store($dto);
    }

    private function processCartItems(array $cart, int $orderId): void
    {
        foreach ($cart as $item) {
            $product = $this->productRepository->getById($item['id']);

            $updateStock = [
                "product_id" => $product['id'],
                "quantity" => $product->stock -= $item['quantity'],
            ];

            $dtoUpdateStock = (new ProductUpdateStockDtoMapper)
                ->createFormObject($updateStock);

            $this->productRepository->updateStock($dtoUpdateStock);

            $orderDetails = [
                "order_id" => $orderId,
                "product_id" => $product['id'],
                "quantity" => $item['quantity']
            ];

            $dtoOrderDetails = (new OrderDetailsDtoMapper)
                ->createFromObject($orderDetails);

            $this->orderDetailsRepository->store($dtoOrderDetails);
        }
    }

    public function getOrdersByClient(int $client_id)
    {
        $orders = $this->orderRepository->getOrdersByClient($client_id);

        return (new OrderViewDtoMapper)->createCollectionFromDbRecords($orders);
    }
}
