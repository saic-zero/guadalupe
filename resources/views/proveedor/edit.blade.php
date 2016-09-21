@extends('layouts.admin')
@section('content')
@include('alertas.request')
{!! Form::model($proveedor,['route'=>['proveedor.update',$proveedor->id],'method'=>'PUT']) !!}
@include('proveedor.formulario.usr')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

@stop
