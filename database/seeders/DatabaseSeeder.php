<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Skateboard;
use App\Models\Skateboard_Color;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Type::factory(3)->create();
        Color::factory(3)->create();
        Skateboard::factory(20)->create();
        Skateboard_Color::factory(10)->create();

    }
}
