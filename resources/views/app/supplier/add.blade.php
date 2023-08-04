@extends('app.layouts.basic')

@section('title', 'Supplier Add')

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
      {{$msg ?? ''}}
      <div style="width: 30%; margin-left: auto; margin-right: auto">
        <form method="post" action="{{route('app.supplier.add')}}">
          <input type="hidden" name="id" value="{{$supplier->id ?? ''}}">
          @csrf
          <input type="text" name="name" value="{{$supplier->name ?? old('name')}}" placeholder="Name"
                 class="borda-preta">
          {{$errors->has('name') ? $errors->first('name') : ''}}

          <input type="text" name="website" value="{{$supplier->website ?? old('website')}}" placeholder="Website"
          class="borda-preta">
          {{$errors->has('website') ? $errors->first('website') : ''}}

          <input type="text" name="phone" value="{{$supplier->phone ?? old('phone')}}" placeholder="PhoneNumber"
                 class="borda-preta">
          {{$errors->has('phone') ? $errors->first('phone') : ''}}

          <input type="text" name="uf" value="{{$supplier->uf ?? old('uf')}}" placeholder="UF" class="borda-preta">
          {{$errors->has('uf') ? $errors->first('uf') : ''}}

          <input type="text" name="email" value="{{$supplier->email ?? old('email')}}" placeholder="Email"
                 class="borda-preta">
          {{$errors->has('email') ? $errors->first('email') : ''}}

          <button type="submit" class="borda-preta">Add new Supplier</button>
        </form>
      </div>
    </div>
  </div>
@endsection()