<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_go_to_login(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    public function test_authenticate_login(): void
    {
        $response = $this->post('/login', [
            'email' => 'angie@mimail.com',
            'password' => 'password'
        ]);

        $response->assertStatus(200);
    }

}
