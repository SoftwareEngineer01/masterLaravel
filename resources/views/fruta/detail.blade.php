<h1>{{$fruta->nombre}}</h1>

<p>
    {{$fruta->descripcion}}
</p>

<a href="{{ action('FrutaController@edit', ['id' => $fruta->id]) }}">Editar</a>
<a href="{{ action('FrutaController@destroy', ['id' => $fruta->id]) }}">Eliminar</a>
<a href="{{ action('FrutaController@index') }}">Cancelar</a>
