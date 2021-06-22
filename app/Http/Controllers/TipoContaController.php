<?php

namespace App\Http\Controllers;

use App\TipoConta;
use Illuminate\Http\Request;

class TipoContaController extends Controller
{
    public function index()
    {
        return TipoConta::all();
    }

    public function show($id)
    {
        return TipoConta::findOrfail($id);
    }
    public function store(Request $request)
    {
        TipoConta::create($request->all());
    }
    public function update(Request $request, $id)
    {
        $user = TipoConta::findOrfail($id);
        $user->update($request->all());
    }
    public function destroy($id)
    {
        $user = TipoConta::findOrfail($id);
        $user->delete();
    }
}
