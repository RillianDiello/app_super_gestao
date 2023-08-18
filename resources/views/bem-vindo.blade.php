@extends('layouts.app')
@section('content')
    <h1>Bem-vindo ao meu aplicativo Laravel!</h1>
    <h2>Aluno: {{$name}}</h2>
@endsection


@extends('layouts.app')

@section('content')

    <h1>Post</h1>
    <x-texto tamanho="500"/>

@endsection

<!DOCTYPE html>
<html>
    <head>
        <title>Página de Exemplo</title>
    </head>
    <body>
        @php
            $idade = 25;
        @endphp

        @if($idade >= 18)
            <h1>Bem-vindo! Você é maior de idade.</h1>
        @else
            <h1>Desculpe, você é menor de idade.</h1>
        @endif
    </body>
</html>


