@extends('app.layouts.basic')

@section('title', 'Supplier')

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
                <form method="post" action="{{ route('app.supplier.list')}}">
                    @csrf
                    <input type="text" name="name" placeholder="Name" class="borda-preta">
                    <input type="text" name="website" placeholder="Website" class="borda-preta">
                    <input type="text" name="phone" placeholder="PhoneNumber" class="borda-preta">
                    <input type="text" name="uf" placeholder="UF" class="borda-preta">
                    <input type="text" name="email" placeholder="Email" class="borda-preta">
                    <button type="submit" class="borda-preta">Search</button>
                </form>
            </div>
        </div>
    </div>
@endsection()