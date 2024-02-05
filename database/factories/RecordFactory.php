<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Record;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Record::class;     
    
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 60),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
        ];
    }
}
