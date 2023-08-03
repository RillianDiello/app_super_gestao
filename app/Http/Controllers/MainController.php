<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;

class MainController extends Controller
{
    public function principal()
    {

        $motivo_contacts = MotivoContato::all();
        return view('site.principal',['motivo_contatos' => $motivo_contacts]);
    }
}
