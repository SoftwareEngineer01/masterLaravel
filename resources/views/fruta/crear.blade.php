@if(isset($fruta) && is_object($fruta))
    <h1>Editar Fruta</h1>
@else
    <h1>Agregar Fruta</h1>
@endif

<form action="{{ isset($fruta) ? action('FrutaController@update') : action('FrutaController@store') }}" method="POST">
    @csrf

    @if(isset($fruta) && is_object($fruta))
        <input type="hidden" name="id" value="{{ $fruta->id }}">   
    @endif

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="" value="{{ isset($fruta) ? $fruta->nombre : '' }}">
    <br>

    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" id="" value="{{ isset($fruta) ? $fruta->descripcion : '' }}">
    <br>

    <label for="precio">Precio</label>
    <input type="number" name="precio" id="" value="{{ isset($fruta) ? $fruta->precio : '' }}">
    <br>

    <input type="submit" value="Enviar">

</form>

<a href="{{ action('FrutaController@index') }}">Cancelar</a>