@extends('layouts.principal')

@section('Detalhes Clientes')

@section('conteudo')

    <h1>DETALHES</h1>
    <p>ID: {{ $cliente['id'] }}</p>
    <p>Nome: {{ $cliente['nome'] }}</p>
    <a href="{{ route('clientes.index') }}">Voltar</a>

@endsection