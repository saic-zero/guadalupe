@include('alertas.request')
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Proveedores</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->
  <div class="box-body">
    <div class="row">
    <div class="col-md-6">
        <table class="table">
    <tr>


    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbNombre','* Nombre:')!!}</td>
				<td>{!!Form::text('nombreProv',null,['class'=>'form-control', 'placeholder'=>'Digite nombre del proveedor...','required'])!!}</td>
			    </div>
	      </tr>
        
		
    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbRepresentante','* Representante:')!!}</td>
				<td>{!!Form::text('representanteProv',null,['class'=>'form-control', 'placeholder'=>'Digite nombre del representante...','required'])!!}</td>
			    </div>
	      </tr>


    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbRUC','* RUC:')!!}</td>
				<td>{!!Form::text('RUC',null,['class'=>'form-control', 'placeholder'=>'Ejemplo:55555-555','required'])!!}</td>
			    </div>
	      </tr>
					

    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbCorreo','* Correo Electronico:')!!}</td>
				<td>{!!Form::text('correoProv',null,['class'=>'form-control', 'placeholder'=>'dirección@mail.com','required'])!!}</td>
			    </div>
	      </tr>	

					
    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbDireccion','* Dirección:')!!}</td>
				<td>{!!Form::text('direccionProv',null,['class'=>'form-control', 'placeholder'=>'Digite dirección del proveedor...','required'])!!}</td>
			    </div>
	      </tr>



    	   <tr>
			    <div class="form-group">
				<td>{!!Form::label('lbTelefono','* Telefono:')!!}</td>
				<td><input name="telefonoProv" id="telefonoEmp" type="text" class="form-control" data-inputmask='"mask": "9999-9999"' data-mask></td>
			    </div>
	      </tr>
						
      </tr>
	    
     
        </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.box-body -->
