<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;
    // Check if the form is loaded correctly
    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    // Check submission works well
    public function test_new_users_can_register() {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'testuser@gmail.com',
            'password' => 'admin12345',
            'password_confirmation' => 'admin12345'
        ]);
        $response->assertRedirect('/home');
    }
}
