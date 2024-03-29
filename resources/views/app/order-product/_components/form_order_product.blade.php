<form method="post" action="{{route('order-product.store', ['order' => $order])}}">
  @csrf

  <select name="product_id">
    <option>-- Select a Product--</option>
    @foreach($products as $product)
      <option
        value="{{$product->id}}"{{old('product_id') === $product->id ? 'selected' : '' }}>{{$product->name}}</option>
    @endforeach
  </select>
  {{ $errors->has('product_id') ? $errors->first('product_id'): ''}}

  <input type="number" name="amount" value="{{ old('amount') ? old('amount'):''}}" placeholder="Amount"
         class="borda-preta">
  {{ $errors->has('amount') ? $errors->first('amount'): ''}}
  <button type="submit" class="borda-preta">Save an Order</button>
</form>