@extends('app.layouts.basic')

@section('title', 'Product Details Add')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Add Product Details</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="#">Back</a></li>
        <li><a href="">Find</a></li>
      </ul>
    </div>

    <div class="informacao-pagina">
      {{$msg ?? ''}}
      <div style="width: 30%; margin-left: auto; margin-right: auto">
        @component('app.product-detail._components.form_product_details', ['units' => $units])
        @endcomponent
      </div>
    </div>
  </div>
@endsection()