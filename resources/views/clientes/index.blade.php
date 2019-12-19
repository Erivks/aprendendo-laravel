<h1>CLIENTES</h1>
<a href="{{ route('clientes.create') }}">Adicionar cliente</a>
<ol>
    @foreach ($clientes as $c)
        <li>
            {{ $c['nome'] }} | 
            <a href="{{ route('clientes.destroy', $c['id']) }}">Deletar</a> |
            <a href="{{ route('clientes.show', $c['id']) }}">Detalhes</a>
        </li> 
    @endforeach
</ol>