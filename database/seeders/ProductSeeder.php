<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $vegetableCategories = array(
            "Event Spaces" => array("Confernce Halls", "Banquet Halls", "Outdoor Venues", "Meeting Rooms", "Theater Spaces"),
            "Event Decor" => array("Floral Arrangements", "Table Decorations", "Lighting Solutions", "Themed Decor","Backdrop Designs"),
            "Audio-Visual Equipment" => array("Projectors", "Sound Systems", "Microphones", "LED Screens", "Stage Lighting"),
            "Event Equipment" => array("Digital Marketing", "Social Media Campaigns", "Printed Materials", "Promotional Items", "Event Branding"),
            "Entertainment Services" => array("Live Bands", "DJ Services", "Magicians", "Photo Booths", "Interactive Games"),
            "Catering Services" => array("Catering Packages", "Beverage Services", "Food Stations","Desert Tables","Specialty Cuisines"),
            "Event Planning and Coordination" => array("Full-Service Planning", "Day-Of Coordination", "Vendor Management", "Timeline Creation","Budget Planning"),
            "Promotional Merchandise" => array("Branded Apparel", "Customized Giveaways", "Branded Stationery", "Event Souvenirs","Logoed Merchandise"),
            "Photography and Videography" => array("Event Photography", "Drone Coverage", "Cinematography", "Photo Editing"),
            "Miscellaneous Services" => array("Event Security", "Transportation Services"),
        );

        foreach ($vegetableCategories as $categoryName => $vegetables) {
            $category = \App\Models\Product::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
            ]);

            foreach ($vegetables as $vegetableName) {
                \App\Models\Product::create([
                    'name' => $vegetableName,
                    'slug' => \Illuminate\Support\Str::slug($vegetableName),
                    'parent_id' => $category->id,
                ]);
            }
        }
    }
}