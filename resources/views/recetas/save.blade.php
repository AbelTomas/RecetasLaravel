@extends('layout')

@section('contenido')
<h2> Guardar Receta </h2>
    {{ Form::open(array('url' => 'receta/' . $receta->id)) }}
    {{ Form::label ('nombre', 'Nombre') }}
    <br />
    {{ Form::text ('nombre', $receta->nombre) }}
    <br />
    {{ Form::label ('numcomensales', 'Comensales') }}
    <br />
    {{ Form::text ('numcomensales', $receta->numcomensales) }}
    <br/>
    {{ Form::label ('ingrediente1', 'Ingrediente1') }}
    <br />
    {{ Form::text ('ingrediente1', $receta->ingrediente1) }}
    {{ Form::label ('cantidad1', 'Cantidad1') }}
    {{ Form::text ('cantidad1', $receta->cantidad1) }}
    <br />
    {{ Form::label ('ingrediente2', 'Ingrediente2') }}
    <br>
    {{ Form::text ('ingrediente2', $receta->ingrediente2) }}
    {{ Form::label ('cantidad2', 'Cantidad2') }}
    {{ Form::text ('cantidad2', $receta->cantidad2) }}
    <br>
    {{ Form::label ('ingrediente3', 'Ingrediente3') }}
    <br />
    {{ Form::text ('ingrediente3', $receta->ingrediente3) }}
    {{ Form::label ('cantidad3', 'Cantidad3') }}
    {{ Form::text ('cantidad3', $receta->cantidad3) }}
    <br>
    {{ Form::label ('categoria', 'Categoria') }}
    <br />
    {{ Form::text ('categoria', $receta->categoria) }}
    <br />
    {{ Form::selectRange('valoracion', 1, 9, array('selected' => $receta->valoracion) ) }}


    <br />
{{ Form::submit('Guardar receta') }}
{{ link_to('receta', 'Cancelar') }}
{{ Form::close() }}
@endsection