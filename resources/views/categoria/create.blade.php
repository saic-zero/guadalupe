@extends('layouts.admin')

@section('content')
@include('alertas.request')
{!! Form::open(['route'=>'categoria.store','method'=>'POST']) !!}
    @include('categoria.formulario.forCategoria')
  {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
   {!! Form::reset('Cancelar',['class'=>'btn btn-danger']) !!}
{!! Form::close() !!}
@stop
