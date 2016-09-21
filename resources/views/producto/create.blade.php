
@extends ('layouts.admin')
<?php $bandera=1; ?>
@section('content')

@include('alertas.request')
{!! Form::open(['route'=>'producto.store','method'=>'POST']) !!}

    @include('producto.formulario.forProductoCreate')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
	@endsection
