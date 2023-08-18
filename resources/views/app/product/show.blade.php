@extends('app.layouts.basic')

@section('title', 'Supplier Add')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Product Details</p>
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
        <table border="1" style="align-items: left">
          <tr>
            <td>ID:</td>
            <td>{{$product->id}}</td>
          </tr>
          <tr>
            <td>Name:</td>
            <td>{{$product->name}}</td>
          </tr>
          <tr>
            <td>Description:</td>
            <td>{{$product->description}}</td>
          </tr>
          <tr>
            <td>Weight:</td>
            <td>{{$product->weight}} - KG</td>
          </tr>
          <tr>
            <td>Mensure Unit:</td>
            <td>{{$product->unit_id}} </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
@endsection()