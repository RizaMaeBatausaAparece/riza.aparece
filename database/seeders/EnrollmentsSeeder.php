<?php

namespace Database\Seeders;

use App\Models\Enrollments;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnrollmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
   {
       Enrollments::factory()->count(20)->create(); // Change 30 to the number of records you want to generate
   }
}
