<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '123-456-7890',
            'message' => 'Hello, this is a test message.'
        ]);

        Contact::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'phone' => '098-765-4321',
            'message' => 'Hi, this is another test message.'
        ]);
        Contact::create([
            'name' => 'Immanuel Excel',
            'email' => 'excel@yahoo.com',
            'phone' => '081390102921',
            'message' => 'Hi, this is another test message.'
        ]);
        
        
    }
}
