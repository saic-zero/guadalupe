<?php
if($bandera==1){
	$categ=null;
}else{
	$categ = $producto->categoria_id;
}
 ?>

  @include('alertas.request')
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Productos</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->
  <div class="box-body">
    <div class="row">
    <div class="col-md-6">
        <table class="table">
    <tr>
           <div class="col-md-6">
	        <div class="form-group">
	        <td> {!!Form::label('lbCodPro','Código Producto:')!!}</td> 
			<td>{!!Form::text('codProducto',null,['class'=>'form-control', 'placeholder'=>'Código de Producto..','required'])!!}</td>
		    </div>
	    </div>
	</tr>    
	
  <tr>
	<div class="form-group">
	    <td>{!!Form::label('lbNombre','Nombre:')!!}</td>
		<td>{!!Form::text('nombreProd',null,['class'=>'form-control', 'placeholder'=>'Nombre del Producto...','required'])!!}</td>
		</div>
	</tr>
        
	    <tr>
		    <div class="form-group">
			<td>{!!Form::label('lbDescripcionPro','Descripción:')!!}</td>
			<td>{!!Form::textarea('descripcionProd',null,['class'=>'form-control', 'placeholder'=>'Descripción del Producto','required'])!!}</td>
		    </div>
	     </tr>

       <tr>
		    <div class="form-group">
			<td>{!!Form::label('lbPresentacionPro','Presentación:')!!}</td>
			<td>{!!Form::text('presentacionProd',null,['class'=>'form-control', 'placeholder'=>'Presentación del Producto','required'])!!}</td>
			</div>
	   </tr>

      <tr>
	      	<div class="form-group">
			<td>{!!Form::label('lbStockMinimo','Stock Minimo:')!!}</td>
			<td>{!!Form::number('stockMinimo',null,['class'=>'form-control', 'placeholder'=>'Cantidad Minima en existencia','required'])!!}</td>
		    </div>
      </tr>
	    

      <tr>
        <div class="form-group">
		<td>{!!Form::label('lbStockMaximo','Stock Maximo:')!!}</td>
		<td>{!!Form::number('stockMaximo',null,['class'=>'form-control', 'placeholder'=>'Cantidad Maxima en existencia','required'])!!}</td>
	    </div>
      </tr>
	  
      <tr>
          <div class="form-group">
		<td>{!!Form::label('lbCategoria','Categoria:')!!}</td>
		<td><select class="form-control" name="categoria_id">
					@foreach($categorias as $cat)
					@if($categ=$cat->id && $categ!=null)
					<option value="{{$cat->id}}" selected="selected">{{$cat->nombreCategoria}}</option>
					@else
					<option value="{{$cat->id}}">{{$cat->nombreCategoria}}</option>
							@endif
					
					@endforeach
				</select></td>
			</div>
      </tr>
	    
     
        </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.box-body -->


