<?php

namespace Tests\Feature\Product;

use Tests\BaseTest;

class ProductTest extends BaseTest
{
    /**
     * @test
     */
    public function is_get_by_id_working(): void
    {
        $response = $this->getJson(route('Product.GetById', ['ProductId' => 1]));

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'message',
            'data',
        ]);

        $response->assertJson([
            'message' => 'Informacion del producto',
        ]);
    }
}
