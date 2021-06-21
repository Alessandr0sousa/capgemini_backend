<?php

namespace App\Http\Controllers;

use App\Agecia;
use Illuminate\Http\Request;

class AgenciaController extends Controller
{
    public function index()
    {
        return Agecia::all();
    }

    public function show($id)
    {
        return Agecia::findOrfail($id);
    }
    public function store(Request $request)
    {
        Agecia::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $user = Agecia::findOrfail($id);
        $user->update($request->all());
    }
    public function destroy($id)
    {
        $user = Agecia::findOrfail($id);
        $user->update();
    }
}
