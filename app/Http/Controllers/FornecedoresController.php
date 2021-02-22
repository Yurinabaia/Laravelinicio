<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    //
    public function index() 
    {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '00.000.00', 'ddd' => '11', 'tel' => '000-000-000'],
            1 => ['nome' => 'Fornecedor 2', 'status' => null, 'ddd' => '11', 'tel' => '000-000-000' ],
            2 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '00.000.00', 'ddd' => '31', 'tel' => '000-000-000'],
            3 => ['nome' => 'Fornecedor 2', 'status' => null, 'ddd' => '21', 'tel' => '000-000-000']
        ];
       return view('app.fornecedor.index', compact('fornecedores'));
    }
}
