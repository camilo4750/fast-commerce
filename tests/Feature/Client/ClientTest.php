<?php

namespace Tests\Feature\Client;

use Tests\BaseTest;

class ClientTest extends BaseTest
{
    /**
     * @test
     */
    public function is_get_by_id_working(): void
    {
        $response = $this->getJson(route('Client.GetById', ['clientId' => 1]));

        $response->assertStatus(200);
        $response->assertJsonStructure(['message', 'client']);
    }

    /**
     * @test
     */
    public function is_get_by_email_working(): void
    {
        $response = $this->postJson(route('Client.ExistsByEmail'), [
            'email' => 'john@gmail.com'
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure(['redirect']);
    }
}