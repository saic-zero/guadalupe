<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
     protected $table="proveedors";

    protected $fillable = ['nombreProv','representanteProv','RUC','correoProv','direccionProv','telefonoProv','estadoProv'];
}


