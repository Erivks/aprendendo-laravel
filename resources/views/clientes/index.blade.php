@extends('layouts.principal')

@section('titulo', 'Clientes')

@section('conteudo')
    
    <h1>CLIENTES</h1>
    <a href="{{ route('clientes.create') }}">Adicionar cliente</a>

    @if (count($clientes) > 0)

    <ul>
        @foreach ($clientes as $c)
            <li>
                {{ $c['id']}} | {{ $c['nome'] }} | 
                <a href="{{ route('clientes.show', $c['id']) }}">Detalhes</a> |
                <a href="{{ route('clientes.edit', $c['id']) }}">Editar</a> |
                <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Deletar">
                </form>
            </li> 
        @endforeach
    </ul>

    @else

    <h2>Não existem clientes cadastrados.</h2>

    @endif

@endsection