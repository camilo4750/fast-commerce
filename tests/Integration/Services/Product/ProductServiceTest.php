<?php

namespace Tests\Integration\Services\Product;

use App\Interfaces\Services\Product\ProductServiceInterface;
use Illuminate\Support\Facades\App;
use Tests\BaseTest;

class ProductServiceTest extends BaseTest
{
    /**
     * @test
     */
    public function is_get_by_id_service()
    {
        $product = (App::make(ProductServiceInterface::class))
            ->getById(1);

        $this->assertNull(session('errors'));
        $this->assertEquals(1, $product->id);
        $this->assertEquals('john@gmail.com', $product->email);
    }
}
