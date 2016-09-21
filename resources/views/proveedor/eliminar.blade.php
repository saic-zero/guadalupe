{!! Form::open(['route'=>['proveedor.destroy',$proveedor->id],'method'=>'DELETE']) !!}
  {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
