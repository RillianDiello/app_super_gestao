<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;
use App\Models\SiteContacto;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
//        echo '<prev>';
//        print_r($request->all());
//        echo '</prev>';

//        $contact = new SiteContacto([
//            'name' => $request->input('name'),
//            'phone' => $request->input('phone'),
//            'email' => $request->input('email'),
//            'motivo_contato' => $request->input('contact_reason'),
//            'message' => $request->input('message'),
//        ]);
//        print_r($contact->getAttributes());
//        $contact->save();

//        $otherContact = new SiteContacto();
//        $otherContact->fill($request->all());
//        $otherContact->save();

//        $contact = new SiteContacto();
//        $contact->create($request->all());

        $motivo_contacts =  MotivoContato::all();
        return view('site.contact', ['title' => 'Contact', 'motivo_contatos' => $motivo_contacts]);
    }
    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'phone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'message' => 'required|max:2000',
        ],[
            'required' => 'O campo :attribute deve ser preenchido',
            'name.min' => 'O campo nome deve ter no minimo 2 caracteres',
            'name.max' => 'O campo nome deve ter no maximo quarenta caracteres',
            'email.email' => 'O email informado não é valido Ex.: email@email.com',
            'message.max' => 'A mensagem deve ter no maximo 2000 caracteres'
        ]);
        SiteContacto::create($request->all());
        return redirect()->route('site.index');
//        return view('site.contact', ['title' => 'Contact']);
    }
}
