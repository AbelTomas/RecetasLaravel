@extends('layout')

@section('contenido')

@if(Session::has('notice'))
    <p> <strong> {{ Session::get('notice') }} </strong> </p>
@endif
<p>
    <a href="{{url('receta/create')}}">Crear nueva receta</a>
</p>

@if($recetas->count())

    <table>
        <tr>
            <th>Nombre</th>
            <th>Nº Comensales </th>
            <th>Ingrediente 1</th>
            <th>Cantidad 1</th>
            <th>Ingrediente 2</th>
            <th>Cantidad 2</th>
            <th>Ingrediente 3</th>
            <th>Cantidad 3</th>
            <th>Categoria</th>
            <th>Valoracion</th>
            <th>VER</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
        </tr>
        @foreach($recetas as $receta)
            <tr>
                <td> {{ $receta->nombre }} </td>
                <td> {{ $receta->numcomensales }} </td>
                <td> {{ $receta->ingrediente1 }} </td>
                <td> {{ $receta->cantidad1 }} </td>
                <td> {{ $receta->ingrediente2 }} </td>
                <td> {{ $receta->cantidad2 }} </td>
                <td> {{ $receta->ingrediente3 }} </td>
                <td> {{ $receta->cantidad3 }} </td>
                <td> {{ $receta->categoria }} </td>
                <td> {{ $receta->valoracion }} </td>
                <td> {{ link_to('receta/'.$receta->id, 'Ver') }} </td>
                <td> {{ link_to('receta/'.$receta->id.'/edit', 'Editar') }} </td>
                <td>
                    {{ Form::open(array('url' => 'receta/'.$receta->id)) }}
                    {{ Form::hidden("_method", "DELETE") }}
                    {{ Form::submit("Eliminar") }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
    </table>
@else
    <p> No se han encontrado recetas </p>
@endif
@endsection