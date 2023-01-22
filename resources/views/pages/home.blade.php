@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @if(Session::has('success'))
        <x-adminlte-alert class="" theme="info" title="Info" dismissable>
            Selamat datang {{Auth::user()->full_name}}
        </x-adminlte-alert>
    @endif
    <h1>Dashboard</h1>
@stop

@section('content')
   
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
