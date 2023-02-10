<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    // This is a feature of Laravel PHP Framework to auto generate data when an initial version is insteantiated. Highly used when the project is first created by another user
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin1234'); // encrypt the first user password
        $user->is_admin = 1;
        $user->save();
    }
}
