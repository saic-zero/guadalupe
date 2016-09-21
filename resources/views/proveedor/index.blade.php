@extends('layouts.admin')
@section('content')
@if (Session::has('mensaje'))
<div class="alert alert-info" role="alert" >
  <button type="button" class="close" data-dismiss="alert" aria-label="close" name="button"><span aria-hidden="true" >&times;</span></button>
{{Session::get('mensaje')}}
</div>
@endif

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Listado de Proveedores</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
              <th>NOMBRE</th>
              <th>REPRESENTANTE</th>
              <th>CORREO</th>
              <th>DIRECCION</th>
              <th>TELEFONO</th>
              <th>ESTADO</th>
              <th>ACCION 1</th>
              <th>ACCION 2</th>
          </thead>
          @foreach ($proveedors as $proveedor)
          <tbody>
             <td>{{$proveedor->nombreProv}}</td>
             <td>{{$proveedor->representanteProv}}</td>
             <td>{{$proveedor->correoProv}}</td>
             <td>{{$proveedor->direccionProv}}</td>
             <td>{{$proveedor->telefonoProv}}</td>
             <td>{{$proveedor->estadoProv}}</td>
             <td>{!!link_to_route('proveedor.edit',$title='Editar', $parametro=$proveedor->id,$atributo=['class'=>'btn btn-primary'])!!}</td>
             <td>@include('proveedor.eliminar')</td>
          </tbody>
            @endforeach
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
  <div>

    <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>

  <!-- <script>
  document.querySelector('ul.examples li.warning.confirm button').onclick = function(){
    swal({
      title: "Are you sure?",
      text: "You will not be able to recover this imaginary file!",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Yes, delete it!',
      closeOnConfirm: false
    },
    function(){
      swal("Deleted!", "Your imaginary file has been deleted!", "success");
    });
  };


  </script> -->

@stop

