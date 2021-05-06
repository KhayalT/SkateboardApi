<?php

namespace Database\Factories;

use App\Models\Color;
use App\Models\Skateboard;
use App\Models\Skateboard_Color;
use Illuminate\Database\Eloquent\Factories\Factory;

class Skateboard_ColorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Skateboard_Color::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'skateboard_id'=>Skateboard::all()->random()->id,
            'color_id'=>Color::all()->random()->id,
        ];
    }
}
