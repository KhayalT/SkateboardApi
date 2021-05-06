<?php

namespace Database\Factories;

use App\Models\Skateboard;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkateboardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Skateboard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_id'=>Type::all()->random()->id,
            'skateboard_name'=>$this->faker->word,
            'price'=>rand(10,1000),
            'print_price'=>rand(1,100),
        ];
    }
}
