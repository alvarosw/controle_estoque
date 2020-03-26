<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\ClienteRequests;

class ClienteController extends Controller
{
<<<<<<< HEAD
  
    public function cadastrar(){
        
    }       

    public function editar(){
        $clientes = Cliente::all();
    }

    public function ler(){
        $clientes = Cliente::all();
    }





=======
    
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
>>>>>>> f8cdba0359f0ff594225d69d1482af880a5ce994
}
