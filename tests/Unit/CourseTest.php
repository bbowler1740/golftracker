<?php

//©pending

use App\Models\Course;
use App\Models\Round;
use App\Models\User;

test('courses have many rounds', function () {
    $user = User::factory()->create();
    $course = Course::factory()->create();

    Round::factory()
        ->for($course)
        ->for($user)
        ->count(3)
        ->create();

    expect($course->rounds()->count())->toBe(3);
});
