<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\ClienteRequests;

class ClienteController extends Controller
{
    public function index()
    {
        $res = Cliente::all();
        return($res);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $input = $request -> all();
        Cliente::create($input);
        return redirect('clientes');
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update($request->all());
        
        return redirect('clientes');
    }
}
