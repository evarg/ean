<?php

namespace Database\Seeders;

use App\Models\Chaption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChaptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chaption::factory()
            ->count(50)
            ->create();
    }
}
