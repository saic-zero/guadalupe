
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
        <h3 class="box-title">Administración de Categorias</h3>
      </div><!-- /.box-header -->
      <br>
      {!!link_to_action("CategoriaController@index", $title = "Todos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("CategoriaController@activo", $title = "activos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      {!!link_to_action("CategoriaController@desactivo", $title = "Desactivos", $parameters = 1, $attributes = ["class"=>"btn bg-olive"])!!}
      <br><br>
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
             <th>CATEGORIA</th>
              <th>ACCION</th>
            </tr>
          </thead>
          @foreach ($categorias as $categoria)
            @if($categoria->estadoCat==1 && $estado==1)
              <tbody>
                <tr>
                <td>{{$categoria->nombreCategoria}}</td>
                  <td><center>
                    {!!link_to_route('categoria.edit',$title='Editar', $parametro=$categoria->id,$atributo=['class'=>'btn btn-primary'])!!}
                    <button class="warning cancel delete-modal btn btn-danger">
                      <span class="glyphicon glyphicon-trash"></span> Dar de baja
                    </button>
                  </center>
                  </td>
                </tr>
              </tbody>
            @endif
            @if($categoria->estadoCat==0 && $estado==0)
              <tbody>
                <tr>
                  <td>{{$categoria->nombreCategoria}}</td>
                 <td><center>
                    {!!link_to_route('categoria.edit',$title='Editar', $parametro=$categoria->id,$atributo=['class'=>'btn btn-primary'])!!}
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
                 <td>{{$categoria->nombreCategoria}}</td>
                  <td><center>
                    {!!link_to_route('categoria.edit',$title='Editar', $parametro=$categoria->id,$atributo=['class'=>'btn btn-primary'])!!}
                    @if($categoria->estadoCat==1)
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
