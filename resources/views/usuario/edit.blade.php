@extends('layouts.admin')
@section('content')
@include('alertas.request')
{!! Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT']) !!}
@include('usuario.formulario.usr')
  {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@stop
