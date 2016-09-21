<?php

namespace SICVFG\Http\Controllers;

use Illuminate\Http\Request;

use SICVFG\Http\Requests;
use SICVFG\Http\Controllers\Controller;
use SICVFG\Producto;
use Session;
use Redirect;
use View;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
    {  
     $productos= \SICVFG\Producto::paginate(2);
     return view('producto.index',compact('productos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $categorias=\SICVFG\Categoria::lists('nombreCategoria','id');
     return view('producto.create',compact('categorias'));
    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \SICVFG\Producto::create([
        'codProducto'=>$request['codProducto'],
        'nombreProd'=>$request['nombreProd'],
        'descripcionProd'=> $request['descripcionProd'],
        'presentacionProd'=>$request['presentacionProd'],
        'stockMinimo'=>$request['stockMinimo'],
        'stockMaximo'=> $request['stockMaximo'],
        'categoria_id'=> $request['categoria_id'],
      ]);
        return redirect('/producto')->with('mensaje','Producto Agregado con Exito');
        
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
      //return"Se esta editando el producto #".$id;
     $categorias=\SICVFG\Categoria::All();
     $producto= \SICVFG\Producto::find($id);
     if(is_null($producto))//Si el producto no existe
       {
        App::abort(404);
       }
     return view('producto.edit',compact('producto','categorias'));//si no
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
        $producto= \SICVFG\Producto::find($id);
        $producto->fill($request->all());
        $producto->save();
       
        Session::flash('mensaje','Producto Editado con Exito');
        return Redirect::to('/producto');
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
}
