<?php 

namespace Tests\Feature\ClientProduct;

use Tests\BaseTest;

class ClientProductTest extends BaseTest
{
    /**
     * @test
     */
    public function is_get_products_by_client_working(): void
    {
        $response = $this->getJson(route('ProductsByClient', ['clientId' => 1]));

        $response->assertStatus(200);
        $response->assertJsonStructure(['message', 'data']);
    }
}