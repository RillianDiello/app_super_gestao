<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $suppliers = [
         0 => ['name' => 'Fornecedor 0', 'status' => 'N', 'cnpj' => '', 'ddd' => '11', 'phone' => '0000-0000'],
         1 => ['name' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => '', 'ddd' => '17', 'phone' => '0000-0000'],
         2 => ['name' => 'Fornecedor 2', 'status' => 'N', 'cnpj' => '', 'ddd' => '85', 'phone' => '0000-0000'],
         3 => ['name' => 'Fornecedor 3', 'status' => 'S', 'cnpj' => '', 'ddd' => '67', 'phone' => '0000-0000'],
         4 => ['name' => 'Fornecedor 4', 'status' => 'S', 'cnpj' => '', 'ddd' => '65', 'phone' => '0000-0000'],
        ];



        $msg = isset($suppliers[1]['cnpj']) ? 'Cnpj informado' : 'Cnpj vazio';
        return view('app.supplier.index', compact('suppliers'));
    }
}
