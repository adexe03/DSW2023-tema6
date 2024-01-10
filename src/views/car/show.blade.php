@extends('layouts.master')

@section('title', 'List cars')

@section('subtitle', 'Listado de coches')

@section('container')
  <p>Nombre: {{$name}}</p>
  <p>Matrícula: {{$matricula}}</p>
@endsection