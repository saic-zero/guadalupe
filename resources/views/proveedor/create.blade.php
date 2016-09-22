@extends ('layouts.admin')

@section('content')
@include('alertas.request')
{!! Form::open(['route'=>'proveedor.store','method'=>'POST']) !!}
    @include('proveedor.formulario.forProveedor')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::reset('Cancelar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
	@endsection




