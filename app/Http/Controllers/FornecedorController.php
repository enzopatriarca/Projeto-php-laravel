<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 =>[
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00' 
            ],
            1 =>[
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '001' 
            ]
        ];

        

        return view('app.Fornecedor.index', compact('fornecedores'));
    }
}
