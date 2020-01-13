@extends('layouts.principal')

@section('Adicionar clientes')

@section('conteudo')

    <h1>Novo Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <input type="text" name="nome">
        <input type="button" value="Salvar">
    </form>

@endsection