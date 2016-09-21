@extends ('layouts.admin')

@section('content')
@include('alertas.request')
{!! Form::open(['route'=>'proveedor.store','method'=>'POST']) !!}
    @include('proveedor.formulario.usr')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
	@endsection




