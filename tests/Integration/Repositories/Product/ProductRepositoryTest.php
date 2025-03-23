<?php

namespace Tests\Integration\Repositories\Product;

use App\Interfaces\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Support\Facades\App;
use Tests\BaseTest;

class ProductRepositoryTest extends BaseTest
{

    /**
     * @test
     */
    public function is_get_by_id_repo()
    {
        $product = (App::make(ProductRepositoryInterface::class))->getById(1);

        $this->assertNull(session('errors'));
        $this->assertEquals(1, $product->id);
        $this->assertEquals('john@gmail.com', $product->name);
    }
}
