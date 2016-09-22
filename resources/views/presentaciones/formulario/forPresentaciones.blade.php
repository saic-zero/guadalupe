
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Presentación</h3>
    <h6 class="campoObligatorio">los campos con ( * ) son obligatorios</h6>
  </div><!-- /.box-header -->
  <div class="box-body">
    <div class="row">
    <div class="col-md-6">
        <table class="table">
          <tr>
                <div class="form-group">
                  <td>{!! Form::label('lNombre','Nombre:') !!}</td>
                  <td>{!!Form::text('nombrePre',null,['placeholder'=>'Nombre de la presentación'])!!}</td>
              </div>
         </tr>
         <tr>
            <div class="form-group">
               <td>{!! Form::label('lEquivale','Equivalencia:') !!}</td> 
               <td> {!!Form::input('number','equivale',null,['placeholder'=>'Unidades','min'=>'1'])!!}</td>
            </div>
      </tr>
         <tr>
          <div class="form-group">
            <td>{!! Form::label('lPrecio','Ganancia ($):') !!}</td>
            <td>{!!Form::number('ganancia',null,['placeholder'=>'Ganancia por venta','min'=>'0.0','step'=>'0.01'])!!}</td>
          </div>
       </tr>

    <tr>
         <div class="form-group">
            <td>{!!Form::label('lbProducto','Producto:')!!}</td>
            <td>{!!Form::select('producto_id',$productos)!!}</td>
        </div>
    </tr>
</div>
        </table>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.box-body -->
