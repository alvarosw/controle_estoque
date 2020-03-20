<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;
use App\Http\Requests\FornecedorRequests;

class FornecedorController extends Controller
{
    
    public function index()
    {
        $res = Fornecedor::all();
        return($res);
    }

    public function create()
    {
        return view('fornecedores.create');
    }

    public function store(Request $request)
    {
        $input = $request -> all();
        Fornecedor::create($input);
        return redirect('fornecedores');
    }

}
