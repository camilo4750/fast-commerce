<?php

namespace Tests\Feature\OrderDetails;

use Tests\BaseTest;

class OrderDetailsTest extends BaseTest
{
    /**
     *  @test 
     */
    public function is_products_by_order_working(): void
    {
        $orderId = 1;

        $response = $this->getJson(route('OrderDetails.GetProductsByOrder', ['orderId' => $orderId]));

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'message',
            'data',
        ]);

        $response->assertJson([
            'message' => 'Detalles del pedido',
        ]);
    }
}
