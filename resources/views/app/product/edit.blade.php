@extends('app.layouts.basic')

@section('title', 'Product Edit')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Edit Product</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="{{route('product.index')}}">Back</a></li>
        <li><a href="">Find</a></li>
      </ul>
    </div>

    <div class="informacao-pagina">
      <div style="width: 30%; margin-left: auto; margin-right: auto">
        @component('app.product._components.form_product', ['product' => $product, 'units' => $units, 'suppliers' => $suppliers])
        @endcomponent
      </div>
    </div>
  </div>
@endsection()