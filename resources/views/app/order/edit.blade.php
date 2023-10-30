@extends('app.layouts.basic')

@section('title', 'order Edit')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Edit order</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="{{route('order.index')}}">Back</a></li>
        <li><a href="">Find</a></li>
      </ul>
    </div>

    <div class="informacao-pagina">
      <div style="width: 30%; margin-left: auto; margin-right: auto">
        @component('app.order._components.form_order', ['order' => $order, 'units' => $units, 'suppliers' => $suppliers])
        @endcomponent
      </div>
    </div>
  </div>
@endsection()