<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conference;

class ConferenceSeeder extends Seeder
{
    public function run()
    {
        Conference::create(['name' => 'Laravel Conference', 'date' => now()->addDays(30)]);
        Conference::create(['name' => 'PHP Conference', 'date' => now()->addDays(60)]);
    }
}