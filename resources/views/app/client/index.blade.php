@extends('app.layouts.basic')

@section('title', 'Client List')

@section('content')
  <div class="conteudo-pagina">
    <div class="titulo-pagina-2">
      <p>Clients</p>
    </div>
    <div class="menu">
      <ul>
        <li><a href="{{route('client.create')}}">New</a></li>
        <li><a href="">Find</a></li>
      </ul>
    </div>

    <div class="informacao-pagina">
      <div style="width: 90%; margin-left: auto; margin-right: auto">
        <table border="1" width="100%">
          <thead>
          <tr>
            <th>Name</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($clients as $client)
            <tr>
              <td>{{$client->name}}</td>

              <td><a href={{route('client.show', ['client' => $client->id])}}>View</a></td>
              <td><a href={{route('client.edit', ['client' => $client->id])}}>Edit</a></td>
              <td>
                <form id="form_{{ $client->id }}" method="post"
                      action="{{ route('client.destroy', ['client' => $client->id]) }}">
                  @method('DELETE')
                  @csrf
                  <a href="#" onclick="document.getElementById('form_{{ $client->id }}').submit()">Excluir</a>
                </form>
              </td>

            </tr>
          @endforeach
          </tbody>
        </table>
        <div style="width: 5%; height: 5%; margin-left: auto; margin-right: auto">
          {{$clients->appends($request)->links()}}
        </div>
        <br>
        {{ $clients->count() }} - Total Registers per page
        <br>
        {{$clients->total()}} - Total Register
      </div>
    </div>
  </div>
@endsection()