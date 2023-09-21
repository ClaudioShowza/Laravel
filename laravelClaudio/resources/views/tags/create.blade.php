
    <form action="{{ route('tags.store') }}" method ="POST">
    @csrf
    Titulo: <input type="text" name="title"> <br>
    <button type="submit">Enviar</button>
    </form>
