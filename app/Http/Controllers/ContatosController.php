<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatosController extends Controller
{
    //
    public function contatos() 
    {
        var_dump($_GET);
        return view("site.contatos");
    }
}
