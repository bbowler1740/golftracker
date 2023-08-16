<?php

namespace App\Http\Controllers;

use App\Models\Round;
use Illuminate\Http\Request;

class RoundController extends Controller
{
    public function index()
    {
        return view('rounds', ['rounds' =>  Round::all()]);
    }

    public function show(Round $round)
    {
        return view('rounds', ['rounds' => collect([$round])]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
