<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    public function run()
    {
        DB::table('contact')->insert([
            [
                'Full Name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'phone' => '1234567890',
                'message' => 'Hello, this is a test message.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Full Name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'phone' => '0987654321',
                'message' => 'Another test message.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Tambahkan data lainnya sesuai kebutuhan
        ]);
    }
}
