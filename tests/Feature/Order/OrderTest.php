<?php

namespace Tests\Feature\Order;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\BaseTest;

class OrderTest extends BaseTest
{
    use DatabaseTransactions;

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
                    'id' => 2,
                    'name' => 'Laptop Dell',
                    'price' => 1700,
                    'quantity' => 1,
                ],
            ],
        ];

        $response = $this->postJson(route('Order.Store'), $request);

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
      
        $response = $this->getJson(route('OrdersByClient', ['clientId' => $clientId]));
        
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
