<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin')
        ]);


        User::create([
            'name' => 'Excel',
            'email' => 'natanexcel@gmail.com',
            'password' => Hash::make('12345678')
        ]);



        
    }
}
