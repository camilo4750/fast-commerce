<?php

namespace Tests\Integration\Services\Client;

use App\Interfaces\Services\Client\ClientServiceInterface;
use Illuminate\Support\Facades\App;
use Tests\BaseTest;

class ClientServiceTest extends BaseTest
{

    /**
     * @test
     */
    public function is_get_by_id_service()
    {
        $employee = (App::make(ClientServiceInterface::class))
            ->getById(1);

        $this->assertNull(session('errors'));
        $this->assertEquals(1, $employee->id);
        $this->assertEquals('john@gmail.com', $employee->email);
    }


    /**
     * @test
     */
    public function is_get_by_email_service()
    {
        $employee = (App::make(ClientServiceInterface::class))
            ->getByEmail('john@gmail.com');

        $this->assertNull(session('errors'));
        $this->assertEquals('john@gmail.com', $employee->email);
    }
}
