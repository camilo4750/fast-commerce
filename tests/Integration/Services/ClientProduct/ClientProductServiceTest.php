<?php

namespace Tests\Integration\Services\ClientProduct;

use App\Interfaces\Services\ClientProduct\ClientProductServiceInterface;
use Illuminate\Support\Facades\App;
use Tests\BaseTest;

class ClientProductServiceTest extends BaseTest
{
    
    /**
     * @test
     */
    public function is_get_products_by_client_service()
    {
        $products = (App::make(ClientProductServiceInterface::class))
            ->getProductsByClient(1);

        $this->assertNull(session('errors'));

        $this->assertIsArray($products);
        $this->assertNotEmpty($products);
    }

}