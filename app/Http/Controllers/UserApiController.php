<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::paginate(25)->all());
    }

    public function create()
    {
        dd('you hit a route that does not exist yet, oof');
    }

    public function store(Request $request)
    {
        dd('you hit a route that does not exist yet, oof');
    }

    public function show(User $user)
    {
        return (new UserResource($user));
    }

    public function edit(string $id)
    {
        dd('you hit a route that does not exist yet, oof');
    }

    public function update(Request $request, string $id)
    {
        dd('you hit a route that does not exist yet, oof');
    }

    public function destroy(string $id)
    {
        dd('you hit a route that does not exist yet, oof');
    }
}
