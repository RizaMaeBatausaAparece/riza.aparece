<?php

namespace Database\Factories;

use App\Models\Enrollments;
use App\Models\Students;
use App\Models\Courses;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnrollmentsFactory extends Factory
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
            'courses_id' => Courses::factory(),
            'enrollment_date' => $this->faker->date,
        ];
    }
}
