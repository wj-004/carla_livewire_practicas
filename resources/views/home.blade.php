@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>PRUEBAS</h1>
@stop

@section('content')

<h5>Componente 1:</h5>
@livewire('componente-uno')
<hr>
<h5>Componente 2:</h5>
@livewire('componente-dos')
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop