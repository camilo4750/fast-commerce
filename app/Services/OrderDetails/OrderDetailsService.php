<?php

namespace App\Services\OrderDetails;

use App\Exceptions\OrderDetails\OrderDetailsNotFoundException;
use App\Interfaces\Repositories\OrderDetails\OrderDetailsRepositoryInterface;
use App\Interfaces\Services\OrderDetails\OrderDetailsServiceInterface;
use App\Mappers\OrderDetails\OrderDetailsViewDtoMapper;

class OrderDetailsService implements OrderDetailsServiceInterface
{
    protected $orderDetailsRepository;

    public function __construct(OrderDetailsRepositoryInterface $orderDetailsRepository)
    {
        $this->orderDetailsRepository = $orderDetailsRepository;
    }

    public function getProductsByOrder(int $orderId)
    {
        $orderDetails = $this->orderDetailsRepository->getProductsByOrder($orderId);
        
        throw_if(
            !$orderDetails,
            new OrderDetailsNotFoundException()
        );

        return (new OrderDetailsViewDtoMapper)->createCollectionFromDbRecords($orderDetails);
    }
}