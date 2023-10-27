@extends('app.layouts.basic')

@section('title', 'List Products')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Supplier</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="{{route('product.create')}}">New</a></li>
        <li><a href="">Find</a></li>
      </ul>
    </div>

    <div class="informacao-pagina">
      <div style="width: 90%; margin-left: auto; margin-right: auto">
        <table border="1" width="100%">
          <thead>
          <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Supplier</th>
            <th>Weight</th>
            <th>Unit</th>
            <th>Length</th>
            <th>Height</th>
            <th>Width</th>
          </tr>
          </thead>
          <tbody>
          @foreach($products as $product)
            <tr>
              <td>{{$product->name}}</td>
              <td>{{$product->description}}</td>
              <td>{{$product->supplier->name}}</td>
              <td>{{$product->weight}}</td>
              <td>{{$product->unit_id}}</td>
              <td>{{$product->productDetail->length ?? ''}}</td>
              <td>{{$product->productDetail->heigth ?? ''}}</td>
              <td>{{$product->productDetail->width ?? ''}}</td>
              <td><a href={{route('product.show', ['product' => $product->id])}}>View</a></td>
              <td><a href={{route('product.edit', ['product' => $product->id])}}>Edit</a></td>
              <td>
                <form id="form_{{ $product->id }}" method="post"
                      action="{{ route('product.destroy', ['product' => $product->id]) }}">
                  @method('DELETE')
                  @csrf
                  <a href="#" onclick="document.getElementById('form_{{ $product->id }}').submit()">Excluir</a>
                </form>
              </td>

            </tr>
          @endforeach
          </tbody>
        </table>
        <div style="width: 5%; height: 5%; margin-left: auto; margin-right: auto">
          {{$products->appends($request)->links()}}
        </div>
        <br>
        {{ $products->count() }} - Total Registers per page
        <br>
        {{$products->total()}} - Total Register
      </div>
    </div>
  </div>
@endsection()