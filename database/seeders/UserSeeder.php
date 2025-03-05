<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        
        User::create([
            'fname' => 'dhanush',
            'lname' => 'd',
            'email' => 'dddhanush@example.com',
            'password' => Hash::make('Bots@12345'), // ✅ Ensure password is hashed
            'phone' => '7989679464',
        ]);
    }
}
