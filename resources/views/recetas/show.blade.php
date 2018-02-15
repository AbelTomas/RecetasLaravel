@extends('layout')

@section('contenido')
<h2> {{ $receta->nombre }} </h2>
<article id="show">
<ul>
    <li> Nombre de la receta: {{  $receta->nombre }} </li>
    <li> Numero de comensales: {{ $receta->numcomensales }} </li>
    <li> Ingrediente 1: {{ $receta->ingrediente1 }} </li>
    <li> Cantidad 1: {{  $receta->cantidad1 }} </li>
    <li> Ingrediente 2: {{ $receta->ingrediente2 }} </li>
    <li> Cantidad 2: {{  $receta->cantidad2 }} </li>
    <li> Ingrediente 2: {{ $receta->ingrediente3 }} </li>
    <li> Cantidad 2: {{  $receta->cantidad3 }} </li>
    <li> Categoria: {{  $receta->categoria }} </li>
    <li> Valoracion: {{ $receta->valoracion }} </li>
</ul>

</article>
<p id="atras"> {{ link_to('receta', 'Volver atrás') }} </p>
@endsection