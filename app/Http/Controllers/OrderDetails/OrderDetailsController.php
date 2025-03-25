<?php

namespace App\Http\Controllers\OrderDetails;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Wrappers\ControllerWrapper;
use App\Interfaces\Services\OrderDetails\OrderDetailsServiceInterface;
use Illuminate\Http\JsonResponse;

class OrderDetailsController extends Controller
{
    private OrderDetailsServiceInterface $orderDetailsService;

    public function __construct(OrderDetailsServiceInterface $orderDetailsService)
    {
        $this->orderDetailsService = $orderDetailsService;
    }

    public function getProductsByOrder(int $orderId): array|JsonResponse
    {
        return ControllerWrapper::execWithJsonSuccessResponse(function () use ($orderId) {
            return [
                'message' => 'Detalles del pedido',
                'data' => $this->orderDetailsService->getProductsByOrder($orderId)
            ];
        });
    }
}