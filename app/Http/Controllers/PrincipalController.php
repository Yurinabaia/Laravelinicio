<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //Action seria funçao 
    public function principal() 
    {
        return view('site.principal');//Entrando na View que criamos.
    }
}
