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

    public function list(Request $request)
    {
//        dd($request->all());

        $suppliers = Supplier::
            where('name', 'like', '%' . $request->input('name') . '%')
          ->where('website', 'like', '%' . $request->input('website') . '%')
          ->where('phone', 'like', '%' . $request->input('phone') . '%')
          ->where('uf', 'like', '%' . $request->input('uf') . '%')
          ->where('email', 'like', '%' . $request->input('email') . '%')
          ->paginate(3);
//        ->get();
//        dd($suppliers);
        return view('app.supplier.list', ['suppliers' => $suppliers]);
    }

    public function add(Request $request)
    {
        $msg = '';
        if ($request->input('_token') != '' && $request->input('id') == '') {
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
        if ($request->input('_token') != '' && $request->input('id') != '') {
            $supplier = Supplier::find($request->input('id'));
            $update = $supplier->update($request->all());
            if($update){
                $msg =  'Update Supplier Successful';
            }else {
                $msg = 'Error on update';
            }
            return  redirect()->route('app.supplier.edit', ['id' => $request->input('id'), 'msg' => $msg,]);
        }


        return view('app.supplier.add', ['msg' => $msg]);
    }

    public function edit(int $id, $msg = '')
    {
        $supplier = Supplier::find($id);
        return view('app.supplier.add', ['supplier' => $supplier, 'msg' => $msg]);
    }
}
