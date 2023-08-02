<?php

//©pending

use App\Models\Round;
use App\Models\User;

test('users can have rounds', function () {
    $user = User::factory()->create();

    Round::factory()
        ->for($user)
        ->create();

    expect($user->rounds()->count())->toBe(1);
});
