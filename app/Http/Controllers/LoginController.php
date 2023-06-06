<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
        $error = '';
        if ($request->get('error') == 1) {
            $error = 'Usuario não encontrado';
        }
        if ($request->get('error') == 2) {
            $error = 'Necessário login para acessar essa página';
        }
        return view('site.login', ['title' => 'Login', 'error' => $error]);
    }

    public function authenticate(Request $request)
    {
        // validation rules
        $rules = [
          'username' => 'required|email',
          'password' => 'required'
        ];

        // feedback messages
        $feedback = [
          'username.required' => 'Username is required',
          'username.email' => 'Username need to be a valid email',
          'password.required' => 'Password is required'
        ];

        $request->validate($rules, $feedback);

        $email = $request->get('username');
        $password = $request->get('password');

        $userCollection = new User();
        $user = $userCollection->where('email', $email)->where('password', $password)->get()->first();
        if (isset($user->name)) {
            session_start();
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;
//            dd($_SESSION);
            return redirect()->route('app.clients');
        } else {
//            echo 'Usuario não encontrando';
            return redirect()->route('site.login', ['error' => 1]);
        }
    }
}
