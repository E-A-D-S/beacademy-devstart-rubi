<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    public function test_if_home_page_list_products()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_if_contact_page_load()
    {
        $response = $this->get('/contato');
        $response->assertStatus(200);
    }
}
