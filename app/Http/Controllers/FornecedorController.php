<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
public function index(){
    $fornecedores = [
        0=> ['Nome'=>'Fornecedor 1',
        'status' =>'N', 
        'cnpj'=>'2'],
        1=> ['Nome'=>'Fornecedor 2',
        'status' =>'N'],
        3=> ['Nome'=>'Fornecedor 3',
        'status' =>'S',
        'cnpj' =>'24']
    ];

   /*$msg =isset($fornecedores[1]['cnpj']) ? 'CNPJ cadastrado' : 'CNPJ não informado';
    echo $msg;*/
    return view('app.fornecedor.index', compact ('fornecedores'));
}
}
