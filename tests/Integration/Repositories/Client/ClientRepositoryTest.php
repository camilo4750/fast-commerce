<?php

namespace Tests\Integration\Repositories\Client;

use App\Interfaces\Repositories\Client\ClientRepositoryInterface;
use Illuminate\Support\Facades\App;
use Tests\BaseTest;

class ClientRepositoryTest extends BaseTest
{
    /**
     * @test
     */
    public function is_get_by_id_repo()
    {
        $employee = (App::make(ClientRepositoryInterface::class))->getById(1);

        $this->assertNull(session('errors'));
        $this->assertEquals(1, $employee->id);
        $this->assertEquals('john@gmail.com', $employee->email);
    }

     /**
     * @test
     */
    public function is_get_by_email_repo()
    {
        $employee = (App::make(ClientRepositoryInterface::class))->getByEmail('john@gmail.com');

        $this->assertNull(session('errors'));
        $this->assertEquals('john@gmail.com', $employee->email);
    }
}
