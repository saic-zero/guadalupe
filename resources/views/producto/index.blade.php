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
        <h3 class="box-title">Listado de Productos</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
               <thead>
                    <th>NOMBRE</th>
                    <th>MODIFICAR</th>
                    <th>DESHABILITAR</th>
                  </thead>
                  @foreach ($productos as $producto)
                  <tbody>
                    <td>{{$producto->nombreProd}}</td>
                    <td>
                      {!!link_to_route('producto.edit',$title='Editar', $parametro=$producto->id,$atributo=['class'=>'btn btn-primary'])!!}
                    </td>
                    <td>@include('producto.eliminar')</td>

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

