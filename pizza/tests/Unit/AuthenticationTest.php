<?php

    namespace Tests\Unit;

    use App\Models\User;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Faker\Generator as Faker;
    use Illuminate\Support\Str;
    use Tests\TestCase;
    use Hash;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase; // ensure the database is a known state before your test (trait in your test class will
    // migrate the database before and after each test)
    public function test_login_screen_can_be_rendered() {
        $response = $this->get('/login');
        $response->assertStatus(200); // Network status OK
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
    public function test_login_redirect_to_home_successfully(){
        User::factory()->create([
            'email' => 'test@test.com',
            'password' => bcrypt('password')
        ]);
        $response = $this->post('/login', [
            'email' => 'test@test.com',
            'password' => 'password'
        ]);
        $response->assertStatus(302); // Network Status redirect
        $response->assertRedirect('/home');
    }
    public function test_auth_user_can_access_home(){
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/home');
        $response->assertStatus(200);
    }
    public function test_unath_user_cannot_access_home(){
        $response = $this->get('/home');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }
    public function test_user_has_name_attribute(){
        $user = User::factory()->create([
                'name' => 'John',
                'email' => 'test@test.com',
                'password' => bcrypt('password')
        ]);
        $this->assertEquals('John', $user->name);
    }
    public function test_user_has_email_attribute(){
        $user = User::factory()->create([
            'name' => 'John',
            'email' => 'test@test.com',
            'password' => bcrypt('password')
        ]);
        $this->assertEquals('test@test.com', $user->email);
    }
    public function test_user_has_password_attribute(){
        $user = User::factory()->create([
            'name' => 'John',
            'email' => 'test@test.com',
            'password' => Hash::make('password')
        ]);
        $this->assertTrue(Hash::check('password',$user->password)); // new password compare old password
    }

}
