{{$slot}}
<form action="{{route('site.contact')}}" method="post">
    @csrf
    <input name="name" value="{{old('name')}}" type="text" placeholder="Nome" class="{{$classe}}">
    {{$errors->has('name') ? $errors->first('name'): ''}}
    <br>
    <input name="phone" value="{{old('phone')}}" type="text" placeholder="Telefone" class="{{$classe}}">
    {{$errors->has('phone') ? $errors->first('phone'): ''}}
    <br>
    <input name="email" value="{{old('email')}}" type="text" placeholder="E-mail" class="{{$classe}}">
    {{$errors->has('email') ? $errors->first('email'): ''}}
    <br>
    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>

        @foreach($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>
                {{$motivo_contato->motivo_contato}}</option>
        @endforeach
    </select>
    {{$errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id'): ''}}
    <br>
    <textarea name="message" class="{{$classe}}">>{{(old('message') != '') ? old('message'): 'Preencha aqui a sua mensagem'}}
    </textarea>
    {{$errors->has('message') ? $errors->first('message'): ''}}
    <br>
    <button type="submit" class="{{$classe}}">>ENVIAR</button>
</form>

@if($errors->any())
<div style="position: absolute; top: 0px; left: 0px; width: 100%; background-color: red">
    @foreach($errors->all() as $error)
        {{$error}}
        <br />
    @endforeach
</div>
@endif
