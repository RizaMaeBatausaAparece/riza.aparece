<?php

namespace Database\Factories;

use App\Models\Grades;
use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'students_id' => Students::factory(),
            'grade' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'F']),
            'grade_date' => $this->faker->date,
        ];
    }
}
