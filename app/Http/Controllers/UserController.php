<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        return view('users', ['users' =>  User::all()]);
    }

    public function show(User $user)
    {
        return view('users', ['users' => collect([$user])]);
    }
}
