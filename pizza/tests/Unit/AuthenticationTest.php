<?php

    namespace Tests\Unit;

    use App\Models\User;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;
    public function test_login_screen_can_be_rendered() {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function test_user_duplication(){
        $user1 = User::make([
            'name' => 'Rui Neto',
            'email' => 'ruiverganineto@gmail.com'
        ]);
        $user2 = User::make([
            'name' => 'Dhuha',
            'email' => 'dhuha@gmail.com'
        ]);
        $this->assertTrue($user1->name != $user2->name);
    }
}
