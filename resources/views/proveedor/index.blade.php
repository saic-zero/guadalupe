
@extends('layouts.admin')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-info" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
@endif
@if (Session::has('mensaje1'))
<div class="alert alert-warning" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje1')}}
</div>
@endif

<div class="row">
  <div class="col-xs-12">
    <div class="box box-success">
      <div class="box-header">
        <h3 class="box-title">Administración de Proveedores</h3>
      </div><!-- /.box-header -->
      <br>
      {!!link_to_action("ProveedorController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("ProveedorController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("ProveedorController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
                     <th>EMPRESA</th>
                      <th>CONTACTO</th>
                      <th>CORREO</th>
                      <th>DIRECCION</th>
                      <th>TELEFONO</th>
                      <th>ACCION</th>
            </tr>
          </thead>
          @foreach ($proveedors as $proveedor)
            @if($proveedor->estadoProv==1 && $estado==1)
              <tbody>
                <tr>
                  
                     <td>{{$proveedor->nombreProv}}</td>
                     <td>{{$proveedor->representanteProv}}</td>
                     <td>{{$proveedor->correoProv}}</td>
                     <td>{{$proveedor->direccionProv}}</td>
                     <td>{{$proveedor->telefonoProv}}</td>
                  <td><center>
                    {!!link_to_route('proveedor.edit',$title='Editar', $parametro=$proveedor->id,$atributo=['class'=>'btn btn-primary'])!!}
                    <button class="warning cancel delete-modal btn btn-danger">
                      <span class="glyphicon glyphicon-trash"></span> Dar de baja
                    </button>
                  </center>
                  </td>
                </tr>
              </tbody>
            @endif
           @if($proveedor->estadoProv==0 && $estado==0)
              <tbody>
                <tr>
 
                     <td>{{$proveedor->nombreProv}}</td>
                     <td>{{$proveedor->representanteProv}}</td>
                     <td>{{$proveedor->correoProv}}</td>
                     <td>{{$proveedor->direccionProv}}</td>
                     <td>{{$proveedor->telefonoProv}}</td>
                  <td><center>
                    {!!link_to_route('proveedor.edit',$title='Editar', $parametro=$proveedor->id,$atributo=['class'=>'btn btn-primary'])!!}
                    <button class="warning cancel delete-modal btn btn-danger">
                      <span class="glyphicon glyphicon-trash"></span> Activar
                    </button>
                  </center>
                  </td>
                </tr>
              </tbody>
            @endif
            @if($estado==2)
              <tbody>
                <tr>
                     <td>{{$proveedor->nombreProv}}</td>
                     <td>{{$proveedor->representanteProv}}</td>
                     <td>{{$proveedor->correoProv}}</td>
                     <td>{{$proveedor->direccionProv}}</td>
                     <td>{{$proveedor->telefonoProv}}</td>
                  <td><center>
                    {!!link_to_route('proveedor.edit',$title='Editar', $parametro=$proveedor->id,$atributo=['class'=>'btn btn-primary'])!!}
                    @if($proveedor->estadoProv==1)
                      <button class="warning cancel delete-modal btn btn-danger">
                        <span class="glyphicon glyphicon-trash"></span> Dar de baja
                      </button>
                  @else
                      <button class="warning cancel delete-modal btn btn-danger">
                        <span class="glyphicon glyphicon-trash"></span> Activar
                      </button>
                  @endif
                  </center>
                  </td>
                </tr>
              </tbody>
            @endif
          @endforeach
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->
@stop
