<?php
if($bandera==1){
	$suc=null;
	$car=null;
}else{
	$suc = $empleados->sucursal_id;
	$car = $empleados->cargo_id;
}
 ?>
 <div class="box box-success">
	 <div class="box-header with-border">
		 <h3 class="box-title">Nuevo Empleado</h3>
		 <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
	 </div><!-- /.box-header -->
			 	<div class="box-body">
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab">Datos personales</a></li>
							<li><a href="#tab_2" data-toggle="tab">Documentos de identificación</a></li>
							<li><a href="#tab_3" data-toggle="tab">Datos Laborales</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<div class="col-md-6">
								<br>
		 						 <div class="form-group">
									{!!Form::label('limagen','Imagen:')!!}
									{!!Form::file('nombre_img',['value'=>'Elija'])!!}
								</div>
								<div class="form-group">
									{!!Form::label('lbNombre','* Nombres:')!!}
								  {!!Form::text('nombresEmp',null,['class'=>'form-control', 'placeholder'=>'Nombres del Empleado...','required'])!!}
								 </div><!-- /.form-group -->
		 						 <div class="form-group">
									{!!Form::label('lbApellidos','* Apellidos:')!!}
		 							{!!Form::text('apellidosEmp',null,['class'=>'form-control', 'placeholder'=>'Apellidos del Empleado...','required'])!!}
		 						</div><!-- /.form-group -->
								<div class="form-group">
									{!!Form::label('lbSexo','* Sexo:')!!}
									<select class="form-control" name="sexo">
											<option >seleccione una opción...</option>
													@if($empleados->sexo=='Masculino')
												<option selected="selected">Masculino</option>
												<option >Femenino</option>
											@else
												<option>Masculino</option>
												<option selected="selected">Femenino</option>
											@endif
									</select>
								</div><!-- /.form-group -->
							</div><!-- /.col primera columna -->
		 					<div class="col-md-6">
									<br>
									<br><br><br>
		 							<div class="form-group">
										{!!Form::label('lbFechaNac','* Fecha de Nacimiento:')!!}
										{!!Form::date('fechaNacimiento',null,['class'=>'form-control', 'placeholder'=>'Fecha...','required'])!!}
									</div><!-- /.form-group -->
									<div class="form-group">
										{!!Form::label('lbTelefono','* Teléfono :')!!}
										{!!Form::text('telefonoEmp',null,['onKeyPress'=>'return validarTelefono(event)','id'=>'telefonoEmp','class'=>'form-control', 'placeholder'=>'Telefono ..','required'])!!}
									</div><!-- /.form-group -->
									<div class="form-group">
										{!!Form::label('lbDomicilio','* Domicilio:')!!}
		 								{!!Form::textarea('direccionEmp',null,['class'=>'form-control', 'placeholder'=>'Domicilio del Empleado...','required', 'rows'=>'2', 'cols'=>'5'])!!}
		 							</div><!-- /.form-group -->
								</div><!-- /.col segunda columna -->
									<p>formulario 1 de 3</p>
							</div><!-- /.tab-pane  cierre tab 1-->
							<div class="tab-pane" id="tab_2">
								<div class="col-md-6">
									<br>
									<div class="form-group">
										{!!Form::label('lbDui','* DUI:')!!}
										{!!Form::text('DUI',null,['onKeyPress'=>'return validarDUI(event)','id'=>'DUI','class'=>'form-control', 'placeholder'=>'Documento Unico de Identidad...','required'])!!}
									</div><!-- /.form-group -->
									<div class="form-group">
										{!!Form::label('lbNit','* NIT:')!!}
										{!!Form::text('NIT',null,['onKeyPress'=>'return validarNIT(event)','id'=>'NIT','class'=>'form-control', 'placeholder'=>'Numero de Identificación Tributaria...','required'])!!}
									</div><!-- /.form-group -->
								</div><!-- /.col -->
								<div class="col-md-6">
									<br>
									<div class="form-group">
										{!!Form::label('lbAFP','Num_AFP:')!!}
										{!!Form::text('numAFP',null,['onKeyPress'=>'return validarNIT(event)','id'=>'numAFP','class'=>'form-control', 'placeholder'=>'Numero de Identificación Tributaria...'])!!}
									</div><!-- /.form-group -->
									<div class="form-group">
										{!!Form::label('lbISSS','Num_ISSS:')!!}
										{!!Form::text('numISSS',null,['class'=>'form-control', 'placeholder'=>'Ejemplo: 14555-555','id'])!!}
									</div><!-- /.form-group -->
								</div><!-- /.col -->
								<p>formulario 2 de 3</p>
							</div><!-- /.tab-pane -->
							<div class="tab-pane" id="tab_3">
								<div class="col-md-6">
									<br>
									<div class="form-group">
										{!!Form::label('lbCodEmp','* Código_Empleado:')!!}
										{!!Form::text('codEmpleado',null,['class'=>'form-control', 'placeholder'=>'Codigo de Empleado...','required'])!!}
										</div><!-- /.form-group -->
									<div class="form-group">
										{!!Form::label('lbFechaIngSuc','* Fecha de Ingreso:')!!}
										{!!Form::date('fechaIngrSuc',null,['id'=>'fechaIngSuc','class'=>'form-control', 'placeholder'=>'Fecha de ingreso a farmacia...','required'])!!}
								</div><!-- /.form-group -->
								<div class="form-group">
									{!!Form::label('lbRefPer','Referencia laboral:')!!}
									{!!Form::text('referenciaLaboral',null,['id'=>'referenciaP','class'=>'form-control', 'placeholder'=>'Referencia Laboral...','required'])!!}
								</div><!-- /.form-group -->
							</div><!-- /.col -->
							<div class="col-md-6">
								<br>
								<div class="form-group">
									{!!Form::label('lbSucursal','* Sucursal:')!!}
									<select class="form-control" name="sucursal_id">
										@foreach($sucursals as $s)
											@if($suc==$s->id && $suc!=null)
												<option value="{{$s->id}}" selected="selected">{{$s->nombreSuc}}</option>
											@else
												<option value="{{$s->id}}">{{$s->nombreSuc}}</option>
											@endif
										@endforeach
									</select>
								</div><!-- /.form-group -->
								<div class="form-group">
									{!!Form::label('lbCargo','* Cargo:')!!}
									<select class="form-control" name="cargo_id">
										@foreach($cargos as $c)
											@if($car==$c->id && $car!=null)
												<option value="{{$c->id}}" selected="selected">{{$c->nombreCargo}}</option>
											@else
											<option value="{{$c->id}}" >{{$c->nombreCargo}}</option>
											@endif
										@endforeach
									</select>
								</div><!-- /.form-group -->
								<div class="form-group">
									{!!Form::label('lbCorreo','* Correo Electrónico:')!!}
									{!!Form::email('correoEmp',null,['class'=>'form-control', 'placeholder'=>'direccion@mail.com','required'])!!}
								</div><!-- /.form-group -->
							</div><!-- /.col -->
							<p>formulario 3 de 3</p>
								</div><!-- /.tab-pane -->
						</div><!-- /.tab-content -->
					</div><!-- nav-tabs-custom -->
	</div><!-- /.row -->

</div><!-- /.box-body -->
