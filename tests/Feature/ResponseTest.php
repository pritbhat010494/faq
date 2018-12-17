<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ResponseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testLoginPage()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function testRegisterPage()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function testNotificationPage()
    {
        $response = $this->get('/notification');
        $response->assertStatus(200);
    }

}
