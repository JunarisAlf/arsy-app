@extends('adminlte::page')

@section('title', 'Project | Arsy')

@section('content_header')
    @livewire('project.confirm-modal')
    @livewire('alert.simple-alert')
    <h1>Project</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @livewire('project.add')                
            </div>
            <div class="col-12">
                <x-adminlte-card title="Project List" theme="success" icon="fas fa-home">
                    @livewire('project.table', ['projects' => $projects])
                </x-adminlte-card>
            </div>
        </div>
        
    </div>
@stop

@section('css')
    @livewireStyles
    <script src="//unpkg.com/alpinejs" defer></script>

@stop

@section('js')
    @livewireScripts
@stop
