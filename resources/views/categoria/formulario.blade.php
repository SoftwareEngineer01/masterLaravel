<h1>Crear Categoria</h1>

<form action="{{action('CategoriaController@recibir')}}" method="POST">
    @csrf
    <label for="nombre">Categoria: </label>
    <input type="text" name="nombre" id="">
    <br>

    <input type="submit" value="Enviar">

</form>