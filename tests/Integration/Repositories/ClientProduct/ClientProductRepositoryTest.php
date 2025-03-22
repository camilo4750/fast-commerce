<?php

namespace Tests\Integration\Repositories\ClientProduct;

use App\Interfaces\Repositories\ClientProduct\ClientProductRepositoryInterface;
use Illuminate\Support\Facades\App;
use Tests\BaseTest;

class ClientProductRepositoryTest extends BaseTest
{
    /**
     * @test
     */
    public function is_get_products_by_client_repo()
    {
        $products = (App::make(ClientProductRepositoryInterface::class))
            ->getProductsByClient(1);

        $this->assertIsObject($products);

        $this->assertNotEmpty($products);

        $this->assertNull(session('errors'));
        $this->assertObjectHasProperty('id', $products[0]);
    }
}
