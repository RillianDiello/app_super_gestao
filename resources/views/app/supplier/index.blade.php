<h2>Fornecedor</h2>


{{-- Inserindo um comentário--}}

@php
/*
  * {{}} é sinonimo de <?= 'Teste' ?>
  */
// aqui é um bloco php

@endphp


@isset($suppliers)
{{--    @for($i = 0; $i < count($suppliers) && isset($suppliers[$i]); $i++)--}}


{{--    Fornecedor: {{$suppliers[$i]['name']}}--}}
{{--    <br>--}}
{{--    Status: {{$suppliers[$i]['status']}}--}}
{{--    <br>--}}
{{--    CNPJ: {{$suppliers[$i]['cnpj'] ?? 'CNPJ não informado'}}--}}
{{--    <br>--}}
{{--    Telefone: ({{$suppliers[$i]['ddd'] ?? ''}}) {{$suppliers[$i]['phone'] ?? ''}}--}}
{{--    <hr>--}}
{{--    @endfor--}}
{{--    @foreach($suppliers as $supplier)--}}
{{--        Fornecedor: {{$supplier['name']}}--}}
{{--        <br>--}}
{{--        Status: {{$supplier['status']}}--}}
{{--        <br>--}}
{{--        CNPJ: {{$supplier['cnpj'] ?? 'CNPJ não informado'}}--}}
{{--        <br>--}}
{{--        Telefone: ({{$supplier['ddd'] ?? ''}}) {{$supplier['phone'] ?? ''}}--}}
{{--        <hr>--}}
{{--    @endforeach--}}
    @forelse($suppliers as $supplier)
        Iteracão atual: {{$loop->iteration}}
        <br>
        Fornecedor: {{$supplier['name']}}
        <br>
        Status: {{$supplier['status']}}
        <br>
        CNPJ: {{$supplier['cnpj'] ?? 'CNPJ não informado'}}
        <br>
        Telefone: ({{$supplier['ddd'] ?? ''}}) {{$supplier['phone'] ?? ''}}
        <br>
        @if($loop->first)
            Primeira iteracao
        @endif
        @if($loop->last)
            Ultima iteracao
            <br>
            Total de registros: {{$loop->count}}
        @endif
        <hr>
    @empty
        Do not exists suppliers save
    @endforelse
@endisset

<br>


{{--@if($suppliers[0]['status'] == 'N')--}}
{{--    <span>Fornecedor inativo</span>--}}
{{--@else--}}
{{--    <span>Fornecedor Ativo</span>--}}
{{--@endif--}}


{{--<br>--}}
{{--@unless($suppliers[0]['status'] == 'S')--}}
{{--    <span>Fornecedor Inativo</span>--}}
{{--@endunless--}}
{{--</br>--}}

{{--@dd($suppliers)--}}


{{--@if(count($suppliers) > 0 && count($suppliers) < 10)--}}
{{--    <h3>Existem poucos Fornecedores</h3>--}}
{{--@elseif((count($suppliers) > 10 ))--}}
{{--    <h3>Existem muitos Fornecedores</h3>--}}
{{--@else--}}
{{--    <h3>Não existem fornecedores</h3>--}}
{{--@endif--}}

