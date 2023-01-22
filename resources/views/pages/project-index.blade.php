@extends('adminlte::page')

@section('title', 'Project | Arsy')

@section('content_header')
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
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th >No.</th>
                                <th>Nama Project.</th>
                                <th>Catatan.</th>
                                <th>Aksi.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >1</td>
                                <td>Abinaya</td>
                                <td>-</td>
                                <td>
                                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"/>
                                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
