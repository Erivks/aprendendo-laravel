@extends('layouts.principal')

@section('titulo', 'Opcoes')

@section('conteudo')
    <div class="options">
        <ul>
            <li>
                <a class="warning {{ $opcao == '1' ? 'selected' : '' }}" href="{{ route('opcoes', 1) }}">warning</a>
            </li>
            <li>
                <a class="info {{ $opcao == '2' ? 'selected' : '' }}" href="{{ route('opcoes', 2) }}">info</a>
            </li>
            <li>
                <a class="success {{ $opcao == '3' ? 'selected' : '' }}" href="{{ route('opcoes', 3) }}">success</a>
            </li>
            <li>
                <a class="error {{ $opcao == '4' ? 'selected' : '' }}" href="{{ route('opcoes', 4) }}">error</a>
            </li>
        </ul>
    </div>

    @if(isset($opcao))
        @switch($opcao)
            @case(1)
                @alerta(['title' => 'Erro Fatal', 'type' => 'warning'])
                    <p><strong>Ocorreu um erro</strong></p>
                @endalerta
                @break
            @case(2)
                @alerta(['title' => 'Erro Fatal', 'type' => 'info'])
                   <p><strong>Ocorreu um erro</strong></p>
                @endalerta
                @break
            @case(3)
                @alerta(['title' => 'Erro Fatal', 'type' => 'success'])
                    <p><strong>Ocorreu um erro</strong></p>
                @endalerta
                @break
            @case(4)
                @alerta(['title' => 'Erro Fatal', 'type' => 'error'])
                    <p><strong>Ocorreu um erro</strong></p>
                @endalerta
                @break    
        @endswitch
    @endif
@endsection