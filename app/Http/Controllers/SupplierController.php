<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        return view('app.supplier.index');
    }

    public function list()
    {
        return view('app.supplier.list');
    }

    public function add(Request $request)
    {
        $msg = '';
        if ($request->input('_token') != '') {
            $rules = [
              'name' => 'required|min:3|max:40',
              'website' => 'required',
              'phone' => 'required',
              'uf' => 'required|min:2|max:2',
              'email' => 'email'
            ];

            $feedback = [
              'required' => 'The field :attribute is obligate',
              'name.min' => 'The name field must be at least 3 characters long',
              'name.max' => 'The name field must be a maximum of 40 characters',
              'uf.min' => 'The name field must be at least 2 characters long',
              'uf.max' => 'The name field must be a maximum of 2 characters',
              'email.email' => 'The email is wrong format'
            ];

            $request->validate($rules, $feedback);

            $supplier = new Supplier();
            $supplier->create($request->all());

            $msg = 'Supplier created with successfully';
        }

        return view('app.supplier.add', ['msg' => $msg]);
    }
}
