<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FoodController extends Controller
{
    //
    public function index()
    {
        $foods = DB::table('food')->get();
//        dd($users);
        return view('backend.food.index', compact('foods'));
    }

    public function show($id)
    {
        $food = DB::table('food')->where('id', $id)->first();
//        dd($food);
        return view('backend.food.show', compact('food'));
    }
//
    public function create()
    {
        return view('backend.food.create');
    }

    public function store(Request $request)
    {
        $food = $request->except('_token');
        DB::table('food')->insert($food);
        return redirect()->route('food.index');
    }

    public function destroy($id)
    {
        DB::table('food')->where('id', $id)->delete();
        return redirect()->route('food.index');
    }

    public function edit($id)
    {
        $food = DB::table('food')->where('id', $id)->first();
//        dd($user);
        return view('backend.food.update', compact('food'));
    }

    public function update(Request $request, $id)
    {
        $food = $request->except('_token', '_method');
//        dd($user);
        DB::table('food')->where('id', $id)->update($food);
        return redirect()->route('food.index');
    }
}
