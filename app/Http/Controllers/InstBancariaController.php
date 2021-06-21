<?php

namespace App\Http\Controllers;

use App\InstBancaria;
use Illuminate\Http\Request;

class InstBancariaController extends Controller
{
    public function index()
    {
        return InstBancaria::all();
    }

    public function show($id)
    {
        return InstBancaria::findOrfail($id);
    }
    public function store(Request $request)
    {
        InstBancaria::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $user = InstBancaria::findOrfail($id);
        $user->update($request->all());
    }
    public function destroy($id)
    {
        $user = InstBancaria::findOrfail($id);
        $user->update();
    }
}
