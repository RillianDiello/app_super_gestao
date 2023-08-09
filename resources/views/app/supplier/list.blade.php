@extends('app.layouts.basic')

@section('title', 'List Supplier')

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
      <div style="width: 90%; margin-left: auto; margin-right: auto">
        <table border="1" width="100%">
          <thead>
          <tr>
            <th>Name</th>
            <th>WebSite</th>
            <th>UF</th>
            <th>Email</th>
            <th>Phone</th>
            <th></th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($suppliers as $supplier)
            <tr>
              <td>{{$supplier->name}}</td>
              <td>{{$supplier->website}}</td>
              <td>{{$supplier->uf}}</td>
              <td>{{$supplier->email}}</td>
              <td>{{$supplier->phone}}</td>
              <td><a href="{{ route('app.supplier.remove', $supplier->id) }}">Remove</a></td>
              <td><a href="{{ route('app.supplier.edit', $supplier->id) }}">Edit</a></td>

            </tr>
          @endforeach
          </tbody>
        </table>
        <div style="width: 5%; height: 5%; margin-left: auto; margin-right: auto">
          {{$suppliers->appends($request)->links()}}
        </div>
        <br>
        {{ $suppliers->count() }} - Total Registers per page
        <br>

        {{$suppliers->total()}} - Total Register
      </div>
    </div>
  </div>
@endsection()