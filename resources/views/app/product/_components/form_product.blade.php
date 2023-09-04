@if(isset($product->id))
  <form method="post" action="{{route('product.update', ['product' => $product->id])}}">
  @csrf
  @method('PUT')
@else
  <form method="post" action="{{route('product.store')}}">
    @csrf
    @endif

    <input type="text" name="name" value="{{ $product->name ?? old('name')}}" placeholder="Name" class="borda-preta">
    {{ $errors->has('name') ? $errors->first('name'): ''}}
    <input type="text" name="description" value="{{$product->description ?? old('description')}}"
           placeholder="Description"
           class="borda-preta">
    {{ $errors->has('description') ? $errors->first('description'): ''}}
    <input type="text" name="weight" value="{{$product->weight ?? old('weight')}}" placeholder="Weight"
           class="borda-preta">
    {{ $errors->has('weight') ? $errors->first('weight'): ''}}
    <select name="unit_id">
      <option>-- Selecione a Unidade de medida--</option>
      @foreach($units as $unit)
        <option
          value="{{$unit->id}}"{{$product->unit_id ?? old('unit_id') === $unit->id ? 'selected' : '' }}>{{$unit->description}}</option>
      @endforeach
    </select>
    {{ $errors->has('unit_id') ? $errors->first('unit_id'): ''}}

    <button type="submit" class="borda-preta">Save Product</button>
  </form>