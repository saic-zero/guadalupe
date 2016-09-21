<?php

namespace SICVFG;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = ['CodUsuario', 'password','user_id'];

    public function setPasswordAttribute($valor){
      if(!empty($valor)){
        $this->attributes['password']=\Hash::make($valor);
      }
    }

    // public static function getCodEmp($id){
    //   return Empleado::where('id','=',$id)->get();
    // }
}
