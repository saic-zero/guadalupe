<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Empleado;
use SICVFG\Sucursal;
use SICVFG\Cargo;
use Session;
use Redirect;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $empleados= \SICVFG\Empleado::All();
      $estado=2;
        return view('empleado.index',compact('empleados','estado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursals=Sucursal::All();
        $cargos=Cargo::All();
        return view('empleado.create',compact('sucursals','cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Empleado::create([
        'codEmpleado'=>$request['codEmpleado'],
        'nombresEmp'=>$request['nombresEmp'],
        'apellidosEmp'=> $request['apellidosEmp'],
        'direccionEmp'=>$request['direccionEmp'],
        'fechaNacimiento'=>$request['fechaNacimiento'],
        'sexo'=>$request['sexo'],
        'telefonoEmp'=>$request['telefonoEmp'],
        'correoEmp'=> $request['correoEmp'],
        'DUI'=>$request['DUI'],
        'NIT'=>$request['NIT'],
        'numAFP'=>$request['numAFP'],
        'numISSS'=>$request['numISSS'],
        'referenciaLaboral'=> $request['referenciaLaboral'],
        'fechaIngrSuc'=>$request['fechaIngrSuc'],
        'sucursal_id'=> $request['sucursal_id'],
        'cargo_id'=> $request['cargo_id'],
      ]);

      //Empleado:create($request->All());

      return redirect('/empleado')->with('mensaje','registrado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $empleados= Empleado::find($id);
      $sucursals=Sucursal::All();
      $cargos=Cargo::All();
      return view('empleado.edit',compact('empleados','sucursals','cargos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $empleado= Empleado::find($id);
      $empleado->fill($request->all());
      $empleado->save();

      Session::flash('mensaje','Empleado editado correctamente');
      return Redirect::to('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function desactivo($id)
    {
        $estado=0;
        $empleados= \SICVFG\Empleado::All();
          return view('empleado.index',compact('empleados','estado'));
    }
    public function activo($id)
    {
        $estado=1;
        $empleados= \SICVFG\Empleado::All();
          return view('empleado.index',compact('empleados','estado'));
    }

}
