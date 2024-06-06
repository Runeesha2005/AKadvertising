<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Campaign;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campaigns = [
            [
                'name' => 'Summer Sale Campaign',
                'description' => 'Promotional campaign for summer sale event.',
                'start_date' => now(),
                'end_date' => now()->addDays(30),
                'budget' => 5000.00,
            ],
            [
                'name' => 'Holiday Season Campaign',
                'description' => 'Marketing campaign for holiday season offers.',
                'start_date' => now()->addMonths(1),
                'end_date' => now()->addMonths(2),
                'budget' => 8000.00,
            ],
            // Add more campaigns as needed
        ];

        foreach ($campaigns as $campaign) {
            Campaign::create($campaign);
        }
    }
}
