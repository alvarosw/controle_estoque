<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Http\Requests\CategoriaRequests;

class CategoriaController extends Controller
{
    public function index()
    {
        $res = Categoria::all();
        return($res);
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $input = $request -> all();
        Categoria::create($input);
        return redirect('categorias');
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->update($request->all());
        
        return redirect('categorias');
    }
}
