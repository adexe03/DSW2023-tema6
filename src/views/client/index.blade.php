@extends('layouts.master')

@section('title', 'List cars')

@section('subtitle', 'Listado de coches')

@section('container')
<p>Es un vip: {{$vip}}</p>
@if ($vip)
<h2>Eres un cliente VIP</h2>
@else
<h2>No eres un cliente VIP</h2>
@endif
<p>Parrafo siempre visible</p>
<p>{{count($clients)}}</p>
<ul>
    @foreach($clients as $client)
    <li>{{$client}}</li>
    @endforeach
</ul>
@endsection