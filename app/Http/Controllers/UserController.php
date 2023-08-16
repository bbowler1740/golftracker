<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function create()
    {
        return view('livewire.create-user-form');
    }

    public function store(Request $request)
    {
        dd('snickers');
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
