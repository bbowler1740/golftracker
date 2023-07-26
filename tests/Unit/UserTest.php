<?php

use App\Models\Round;
use App\Models\User;

test('users can have rounds', function () {
    $user = User::factory()->create();

    Round::factory()->create([
        'user_id' => $user->id,
    ]);
    expect($user->rounds()->count())->toBe(1);
});
