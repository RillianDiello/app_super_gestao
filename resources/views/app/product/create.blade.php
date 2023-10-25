@extends('app.layouts.basic')

@section('title', 'Product Add')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Create a product</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="{{route('product.index')}}">Back</a></li>
        <li><a href="">Find</a></li>
      </ul>
    </div>

    <div class="informacao-pagina">
      {{$msg ?? ''}}
      <div style="width: 30%; margin-left: auto; margin-right: auto">
        @component('app.product._components.form_product', ['units' => $units])
        @endcomponent
      </div>
    </div>
  </div>
@endsection()