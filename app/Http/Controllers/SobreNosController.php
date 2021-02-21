<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    //Action
    public function sobreNos( ) 
    {
        return view('site.sobre-nos');//Entrando na View que criamos.
    }
}
