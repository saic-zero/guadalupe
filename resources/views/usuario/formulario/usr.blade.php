<div class="box box-success">
  <div class="box-header with-border">
    <h3 class="box-title">Nuevo Usuario</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->
       <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              {!!Form::label('lbEmpleados','Empleados:')!!}
              <select class="form-control" name="user_id", id="selectEmpleado">
                <option value="">[Seleccione una opción]</option>
                    @foreach($empleados as $emp)
                        <option value="{{$emp->id}}">{{$emp->nombresEmp}}</option>
                        {{-- <option value="{{$emp->codEmpleado}}">{{$emp->nombresEmp}}</option> --}}
                    @endforeach
                  </select>

                </div><!-- /.form-group -->
                <div class="form-group">
                {!!form::label('* Usuario')!!}
              {!!form::text('CodUsuario',null,['id'=>'cod','class'=>'form-control','placeholder'=>'ingrese el nombre del usuario','required'])!!}
            </div><!-- /.form-group -->
            </div><!-- /.col -->
            <div class="col-md-6">
							<div class="form-group">
          {!!form::label('* Contraseña')!!}
              {!!form::password('password',['class'=>'form-control','placeholder'=>'ingrese su password de usuario','title'=>'hola','required'])!!}
            </div><!-- /.form-group -->

          </div><!-- /.col -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.box-body -->
