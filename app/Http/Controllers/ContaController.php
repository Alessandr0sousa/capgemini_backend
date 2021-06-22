<?php

namespace App\Http\Controllers;

use App\Conta;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function index()
    {
        return Conta::all();
    }

    public function show($id)
    {
        return Conta::findOrfail($id);
    }
    public function store(Request $request)
    {
        Conta::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $user = Conta::findOrfail($id);
        $user->update($request->all());
    }
    public function destroy($id)
    {
        $user = Conta::findOrfail($id);
        $user->delete();
    }
}
