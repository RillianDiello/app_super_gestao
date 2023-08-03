@extends('app.layouts.basic')

@section('title', 'List Supplier')

@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Supplier</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{route('app.supplier.add')}}">New</a></li>
                <li><a href="{{route('app.supplier')}}">Find</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto; margin-right: auto">
                List...
            </div>
        </div>
    </div>
@endsection()