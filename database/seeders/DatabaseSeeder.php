<?php

namespace Database\Seeders;

use App\Models\Chaption;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        User::factory()
            ->count(20)
            ->has(Chaption::factory()->count(4), 'chaptions')
            ->create();
    }
}
