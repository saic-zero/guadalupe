@extends ('layouts.principal1')

@section('content')
@include('alertas.request')
{!! Form::open(['route'=>'proveedor.store','method'=>'POST']) !!}
    @include('proveedor.formulario.forProveedor')
    <button class="btn btn-primary">
      <span class="glyphicon glyphicon-floppy-disk"></span> Registrar
    </button>
  {!! Form::reset('Limpiar',['class'=>'btn btn-primary']) !!}
  {!!link_to_action("ProveedorController@index", $title = "Salir", $parameters = 1, $attributes = ["class"=>"btn btn-danger"])!!}
{!! Form::close() !!}
	@endsection




