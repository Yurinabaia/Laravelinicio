<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatosController extends Controller
{
    //Action
    public function contatos() 
    {
        return view('site.contato');//Entrando na View que criamos.
    }
}
