<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index()
    {
        $cliente = Clientes::get();
        return $cliente;
    }  

}
