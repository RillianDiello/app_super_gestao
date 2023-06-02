<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function teste(int $p1, int $p2): string
    {
        // Array associativo
        // return view('site.test', ['p1' => $p1, 'p2' => $p2]);

        // metodo compact(nome string da variavel
        // return view('site.test', compact('p1',  'p2'));

        return view('site.test')->with('p1', $p1)->with('p2', $p2);
    }
}
