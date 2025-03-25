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
        $client = (App::make(ClientRepositoryInterface::class))->getById(1);

        $this->assertNull(session('errors'));
        $this->assertNotNull($client);
        $this->assertEquals(1, $client->id);
        $this->assertEquals('john@gmail.com', $client->email);
    }

     /**
     * @test
     */
    public function is_get_by_email_repo()
    {
        $client = (App::make(ClientRepositoryInterface::class))
            ->getByEmail('john@gmail.com');


        $this->assertNull(session('errors'));
        $this->assertNotNull($client);
        $this->assertEquals('john@gmail.com', $client->email);
    }
}
