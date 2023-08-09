@extends('app.layouts.basic')

@section('title', 'Supplier Add')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Product</p>
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
        <form method="post" action="">
          <input type="hidden" name="id" value="">
          @csrf
          <input type="text" name="name" value="" placeholder="Name" class="borda-preta">

          <input type="text" name="descripiton" value="" placeholder="Descripiton" class="borda-preta">

          <input type="text" name="weight" value="" placeholder="Weight" class="borda-preta">

          <select name="unit_id">
            <option>-- Selecione a Unidade de medida--</option>

            @foreach($units as $unit)
              <option value="{{$unit->id}}">{{$unit->description}}</option>
            @endforeach
          </select>

          <button type="submit" class="borda-preta">Add New Product</button>
        </form>
      </div>
    </div>
  </div>
@endsection()