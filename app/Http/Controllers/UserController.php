<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::findOrfail($id);
    }
    public function store(Request $request)
    {
        User::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrfail($id);
        $user->update($request->all());
    }
    public function destroy($id)
    {
        $user = User::findOrfail($id);
        $user->delete();
    }
}
