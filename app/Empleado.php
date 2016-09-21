<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
  protected $table="empleados";
  //protected $primaryKey="codEmpleado";
  protected $fillable = ['codEmpleado', 'nombresEmp', 'apellidosEmp','direccionEmp','fechaNacimiento','sexo','telefonoEmp','correoEmp','DUI','NIT','numAFP','numISSS','referenciaLaboral','fechaIngrSuc','sucursal_id','cargo_id'];



}
