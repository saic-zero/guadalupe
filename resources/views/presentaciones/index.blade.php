
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
        <h3 class="box-title">Administración de Presentaciones</h3>
      </div><!-- /.box-header -->
      <br>
      {!!link_to_action("PresentacionesController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("PresentacionesController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("PresentacionesController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
                <th>NOMBRE</th>
                <th>EQUIVALENCIA</th>
                <th>GANANCIA</th>
                <th>ACCION</th>
            </tr>
          </thead>
          @foreach ($presentaciones as $p)
            @if($p->estadoPres==1 && $estado==1)
              <tbody>
                <tr>
                    <td>{{$p->nombrePre}}</td>
                    <td><center>{{$p->equivale}}</center></td>
                    <td><center>{{'$ '.$p->ganancia}}</center></td>
             
                  <td><center>
                    {!!link_to_route('presentaciones.edit',$title='Editar', $parametro=$p->id,$atributo=['class'=>'btn btn-primary'])!!}
                    <button class="warning cancel delete-modal btn btn-danger">
                      <span class="glyphicon glyphicon-trash"></span> Dar de baja
                    </button>
                  </center>
                  </td>
                </tr>
              </tbody>
            @endif
           @if($p->estadoPres==0 && $estado==0)
              <tbody>
                <tr>
                  <td>{{$p->nombrePre}}</td>
                    <td><center>{{$p->equivale}}</center></td>
                    <td><center>{{'$ '.$p->ganancia}}</center></td>
             
                  <td><center>
                    {!!link_to_route('presentaciones.edit',$title='Editar', $parametro=$p->id,$atributo=['class'=>'btn btn-primary'])!!}
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
                    <td>{{$p->nombrePre}}</td>
                    <td><center>{{$p->equivale}}</center></td>
                    <td><center>{{'$ '.$p->ganancia}}</center></td>
                  <td><center>
                    {!!link_to_route('presentaciones.edit',$title='Editar', $parametro=$p->id,$atributo=['class'=>'btn btn-primary'])!!}
                    @if($p->estadoPres==1)
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
