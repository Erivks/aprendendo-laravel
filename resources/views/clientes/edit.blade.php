<h1>Edtar cliente</h1>
<form action="{{ route('clientes.update', $cliente['id']) }}" method="POST">
    @csrf
    @method('put')
    <input type="text" name="nome" id="nome" value="{{ $cliente['nome'] }}">
    <input type="submit" value="Editar">
</form>