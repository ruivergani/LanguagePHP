<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HTTPTest extends TestCase
{
    use RefreshDatabase;
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_the_homepage_return_a_successful_redirect_response()
    {
        $response = $this->get('/home');
        $response->assertStatus(302); // Network Status redirect
        $response->assertRedirect('/login');
    }

}
