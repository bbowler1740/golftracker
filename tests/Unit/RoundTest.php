<?php

//©pending

use App\Models\Course;
use App\Models\Round;
use App\Models\User;

test('rounds belong to a user', function () {
    $user = User::factory()->create();

    $round = Round::factory()
        ->for($user)
        ->create();

    expect($round->user->getKey())->toEqual($user->getKey());
});

test('rounds belong to a course', function () {
    $user = User::factory()->create();
    $course = Course::factory()->create();

    $round = Round::factory()
        ->for($user)
        ->for($course)
        ->create();

    expect($round->course->getKey())->toEqual($course->getKey());
});
