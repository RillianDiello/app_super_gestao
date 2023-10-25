@extends('app.layouts.basic')

@section('title', 'Product Details Edit')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Edit Product Details</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="#">Back</a></li>
        <li><a href="">Find</a></li>
      </ul>
    </div>

    <div class="informacao-pagina">
      <h4>
        <div>Nome do Produto {{$product_detail->product->name}}</div>
        <br>
        <div>Descricao {{$product_detail->product->description}}</div>
      </h4>
      <div style="width: 30%; margin-left: auto; margin-right: auto">
        @component('app.product-detail._components.form_product_details', ['product_detail' => $product_detail, 'units' => $units])
        @endcomponent
      </div>
    </div>
  </div>
@endsection()