@extends('layouts.principal')

@section('titulo', 'Departamentos')
    
@section('conteudo')
    <ul>
        <li>Computadores</li>
        <li>Eletronicos</li>
        <li>Acessórios</li>
        <li>Roupas</li>
    </ul>


    @alerta(['title' => 'Erro Fatal'])
        <p><strong>Ocorreu um erro</strong></p>
    @endalerta

@endsection
