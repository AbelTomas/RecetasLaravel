@extends('layout')

@section('contenido')
<section>
@if(Session::has('notice'))
    <p> <strong> {{ Session::get('notice') }} </strong> </p>
@endif
<p id="crear">
<a href="{{url('receta/create')}}" >Crear nueva receta</a>
</p>

@if($recetas->count())

    <table id="tablaInicio">
        <tr>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Valoracion</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach($recetas as $receta)
            <tr>
                <td> {{ $receta->nombre }} </td>
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
</section>
@endsection