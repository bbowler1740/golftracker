<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Round;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoundSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::query()->inRandomOrder()->firstOrFail();
        $course = Course::query()->inRandomOrder()->firstOrFail();

        Round::factory()
            ->for($user)
            ->for($course)
            ->create();
    }
}
