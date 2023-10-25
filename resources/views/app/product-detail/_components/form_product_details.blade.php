@if(isset($product_detail->id))
  <form method="post" action="{{route('product-details.update', ['product_detail' => $product_detail->id])}}">
    @csrf
    @method('PUT')
    @else
      <form method="post" action="{{route('product-details.store')}}">
        @csrf
        @endif

        <input type="text" name="product_id" value="{{ $product_detail->product_id ?? old('product_id')}}"
               placeholder="Product Id" class="borda-preta">
        {{ $errors->has('product_id') ? $errors->first('product_id'): ''}}

        <input type="text" name="length" value="{{$product_detail->length ?? old('length')}}"
               placeholder="Length" class="borda-preta">
        {{ $errors->has('length') ? $errors->first('length'): ''}}
        <input type="text" name="heigth" value="{{$product_detail->heigth ?? old('heigth')}}"
               placeholder="Heigth" class="borda-preta">
        {{ $errors->has('heigth') ? $errors->first('heigth'): ''}}
        <input type="text" name="width" value="{{$product_detail->width ?? old('width')}}"
               placeholder="Width" class="borda-preta">
        {{ $errors->has('width') ? $errors->first('width'): ''}}
        <select name="unit_id">
          <option>-- Selecione a Unidade de medida--</option>
          @foreach($units as $unit)
            <option
              value="{{$unit->id}}"{{$product_detail->unit_id ?? old('unit_id') === $unit->id ? 'selected' : '' }}>{{$unit->description}}</option>
          @endforeach
        </select>
        {{ $errors->has('unit_id') ? $errors->first('unit_id'): ''}}

        <button type="submit" class="borda-preta">Save Product</button>
      </form>