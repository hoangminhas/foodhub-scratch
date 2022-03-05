<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public $userModel;

    public function __construct(UserModel $um)
    {
         $this->userModel = $um;
    }

    public function index()
    {
//        $users = DB::table('users')->get();
        $users = User::all();
//        $users = $this->userModel->getAll();
//        dd($users);
        return view('backend.users.index', compact('users'));
    }

    public function show($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
//        dd($user);
        return view('backend.users.show', compact('user'));
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
        $user = $request->except('_token');
        $user['password'] = Hash::make($user['password']);
//        dd($user);
        DB::table('users')->insert($user);
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
//        dd($user);
        return view('backend.users.update', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = $request->except('_token', '_method');
//        dd($user);
        DB::table('users')->where('id', $id)->update($user);
        return redirect()->route('users.index');
    }
}
