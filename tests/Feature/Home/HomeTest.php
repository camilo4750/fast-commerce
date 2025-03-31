<?php

namespace Tests\Feature\Home;

use Tests\BaseTest;

class HomeTest extends BaseTest
{
    /**
     *  @test 
     */

    public function is_index_working(): void
    {
        $response = $this->get(route('Home.Index', ['clientId' => 1]));

        $response->assertStatus(200);
        $response->assertViewIs('home');
        $response->assertViewHas('clientId', 1);

        ob_end_clean();
    }
}