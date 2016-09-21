@extends('layouts.admin')
@section('content')
@include('alertas.request')
{!! Form::model($categoria,['route'=>['categoria.update',$categoria->id],'method'=>'PUT']) !!}
@include('categoria.formulario.forCategoria')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

@stop

