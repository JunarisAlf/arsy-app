@extends('adminlte::page')

@section('title', 'Ganti Password')

@section('content_header')
    <h1>Ganti Password</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @livewire('user.change-password')
            </div>
        </div>

    </div>
@stop

@section('css')
    @livewireStyles
    
@stop

@section('js')
    @livewireScripts
@stop
