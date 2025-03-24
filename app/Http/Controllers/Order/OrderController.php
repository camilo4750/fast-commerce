<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Wrappers\ControllerWrapper;
use App\Interfaces\Services\Order\OrderServiceInterface;
use App\Interfaces\Services\OrderDetails\OrderDetailsServiceInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private OrderServiceInterface $orderService;

    private OrderDetailsServiceInterface $orderDetailsService;

    public function __construct(OrderServiceInterface $orderService) {
        $this->orderService = $orderService;
    }

    public function store(Request $request): array|JsonResponse
    {
        return ControllerWrapper::execWithJsonSuccessResponse(function () use ($request) {
            (new OrderControllerValidateRules)
                ->validateStoreRequest($request);

            $order_id = $this->orderService->storeOrder($request);

            return [
                "message" => "Orden Creada",
                "id" => $order_id,
            ];
        });
    }
}
