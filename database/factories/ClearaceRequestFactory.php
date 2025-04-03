<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClearaceRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'supervisor_id' => User::where('is_supervisor', true)->get()->random()->id,
            'department_id' => Department::all()->random()->id,
            'date_submitted' => $this->faker->date(),
        ];
    }
}
