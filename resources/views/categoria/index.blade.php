<h1>Lista de Categorías</h1>

<a href="">Crear Categoría</a>

<ul>
    @foreach ($categorias as $categoria)
        <li>{{$categoria->nombre}}</li>
    @endforeach
</ul>