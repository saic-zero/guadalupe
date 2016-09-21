@extends ('layouts.admin')
@section('content')
@include('alertas.request')
{!! Form::open(['route'=>'usuario.store','method'=>'POST']) !!}
    @include('usuario.formulario.usr')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}
	@stop
