@extends('app.layouts.basic')

@section('title', 'Client Add')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Create a Client</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="{{route('client.index')}}">Back</a></li>
        <li><a href="">Find</a></li>
      </ul>
    </div>

    <div class="informacao-pagina">
      {{$msg ?? ''}}
      <div style="width: 30%; margin-left: auto; margin-right: auto">
        @component('app.client._components.form_client')
        @endcomponent
      </div>
    </div>
  </div>
@endsection()