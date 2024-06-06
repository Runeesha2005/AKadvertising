<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
            [
                'name' => 'ABC Company',
                'email' => 'abc@example.com',
                'phone' => '1234567890',
                'business_details' => 'Real Estate Company located in India.',
            ],
            [
                'name' => 'XYZ Corporation',
                'email' => 'xyz@example.com',
                'phone' => '0987654321',
                'business_details' => 'Modeling Agency connect models with brands.',
            ],
            // Add more clients as needed
        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
