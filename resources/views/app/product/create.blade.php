@extends('app.layouts.basic')

@section('title', 'Supplier Add')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Create a product</p>
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
        <form method="post" action="{{route('product.store')}}">
          <input type="hidden" name="id" value="">
          @csrf
          <input type="text" name="name" value="{{old('name')}}" placeholder="Name" class="borda-preta">
          {{ $errors->has('name') ? $errors->first('name'): ''}}
          <input type="text" name="description" value="{{old('description')}}" placeholder="Description"
                 class="borda-preta">
          {{ $errors->has('description') ? $errors->first('description'): ''}}
          <input type="text" name="weight" value="{{old('weight')}}" placeholder="Weight" class="borda-preta">
          {{ $errors->has('weight') ? $errors->first('weight'): ''}}
          <select name="unit_id">
            <option>-- Selecione a Unidade de medida--</option>

            @foreach($units as $unit)
              <option
                value="{{$unit->id}}"{{ old('unit_id') == $unit->id ? 'selected' : '' }}>{{$unit->description}}</option>
            @endforeach
          </select>
          {{ $errors->has('unit_id') ? $errors->first('unit_id'): ''}}

          <button type="submit" class="borda-preta">Add New Product</button>
        </form>
      </div>
    </div>
  </div>
@endsection()