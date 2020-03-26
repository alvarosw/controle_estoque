<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
  
    public function cadastrar(){
        
    }       

    public function editar(){
        $clientes = Cliente::all();
    }

    public function ler(){
        $clientes = Cliente::all();
    }





}
