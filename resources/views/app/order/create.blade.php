@extends('app.layouts.basic')

@section('title', 'Order Add')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Create an Order</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="{{route('order.index')}}">Back</a></li>
        <li><a href="">Find</a></li>
      </ul>
    </div>

    <div class="informacao-pagina">
      {{$msg ?? ''}}
      <div style="width: 30%; margin-left: auto; margin-right: auto">
        @component('app.order._components.form_order', ['clients' => $clients])
        @endcomponent
      </div>
    </div>
  </div>
@endsection()