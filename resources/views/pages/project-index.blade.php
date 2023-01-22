@extends('adminlte::page')

@section('title', 'Project | Arsy')

@section('content_header')
    @if(Session::has('success'))
        <x-adminlte-alert  theme="success" title="Info" dismissable>
            {{session('success')}}
        </x-adminlte-alert>
    @endif
    <h1>Project</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="{{route('project.add')}}" method="post">
                    @csrf
                    <x-adminlte-card title="Tambah Project Baru" theme="primary" icon="fas fa-plus-square">
                        <x-adminlte-input name="name" label="Nama Project" placeholder="Nama Project"   label-class="text-lightblue">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-home text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                        <x-adminlte-input name="note" label="Catatan" placeholder="Catatan" label-class="text-lightblue">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-quote-left text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                        <x-slot name="footerSlot">
                            <x-adminlte-button class="d-flex ml-auto px-3 py-2" theme="primary" label="tambah" type='submit'/>
                        </x-slot>
                    </x-adminlte-card>
                </form>
                
            </div>
            <div class="col-12">
                <x-adminlte-card title="Project List" theme="success" icon="fas fa-home">
                    A dark theme card...
                </x-adminlte-card>
            </div>
        </div>
        
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
