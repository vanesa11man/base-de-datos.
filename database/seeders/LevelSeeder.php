<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::create([
            'name' => 'A1'
        ]);
        Level::create([
            'name' => 'A2'
        ]);
        Level::create([
            'name' => 'B1'
        ]);
        Level::create([
            'name' => 'B1'
        ]);
        Level::create([
            'name' => 'C1'
        ]);
        Level::create([
            'name' => 'C2'
        ]);
    }
}
