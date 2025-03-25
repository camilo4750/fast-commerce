<?php

namespace Tests\Feature\Order;

use Tests\BaseTest;

class OrderTest extends BaseTest
{
    /**
     *  @test 
     */

    public function is_store_working(): void
    {
        $request = [
            'clientId' => 1,
            'cart' => [
                [
                    'id' => 1,
                    'name' => 'Laptop',
                    'price' => 1200,
                    'quantity' => 2,
                ],
                [
                    'id' => 1,
                    'name' => 'Laptop Dell',
                    'price' => 1700,
                    'quantity' => 1,
                ],
            ],
        ];

        $response = $this->postJson(route('orders.store'), $request);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'message',
            'id',
        ]);

        $response->assertJson([
            'message' => 'Orden Creada',
        ]);
    }

    /**
     *  @test 
     */
    public function is_get_orders_by_client_working(): void
    {
        $clientId = 1;

        $response = $this->getJson(route('OrdersByClient', ['client_id' => $clientId]));

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'message',
            'data',
        ]);

        $response->assertJson([
            'message' => 'Listado de ordenes',
        ]);
    }
}
