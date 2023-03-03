@extends('adminlte::page')

@section('title', 'Kas | Dmasgroup')

@section('content_header')
    @livewire('alert.simple-alert')
    <h1>KAS</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @livewire('kas.add-kas')
                <x-adminlte-card title="Riwayat Pemasukan Kas" theme="success" icon="fas fa-boxes">
                    @livewire('kas.kas-table')
                </x-adminlte-card>
                
            </div>
        </div>

    </div>
@stop
@section('plugins.TempusDominusBs4', true)

@section('css')
    @livewireStyles
    <script src="//unpkg.com/alpinejs" defer></script>
@stop

@section('js')
    @livewireScripts
@stop
