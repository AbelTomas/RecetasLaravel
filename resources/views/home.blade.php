@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                     Usuario Validado con éxito

                </div>
            </div>
        </div>
    </div>

    {{ Form::hidden ('_method', 'PUT') }}
    <a href="{{url('receta')}}" id="validado">Ir a Recetas</a>

</div>
@endsection
