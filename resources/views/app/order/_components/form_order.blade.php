@if(isset($order->id))
  <form method="post" action="{{route('order.update', ['order' => $order->id])}}">
    @csrf
    @method('PUT')
@else
      <form method="post" action="{{route('order.store')}}">
      @csrf
@endif

        <select name="client_id">
          <option>-- Select a Client--</option>
          @foreach($clients as $client)
            <option
              value="{{$client->id}}"{{$client->client_id ?? old('client_id') === $client->id ? 'selected' : '' }}>{{$client->name}}</option>
          @endforeach
        </select>
        {{ $errors->has('client_id') ? $errors->first('client_id'): ''}}

    <button type="submit" class="borda-preta">Save an Order</button>
  </form>