{!! Form::open(['route'=>['producto.destroy',$producto->id],'method'=>'DELETE']) !!}
  {!! Form::submit('Deshabilitar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}