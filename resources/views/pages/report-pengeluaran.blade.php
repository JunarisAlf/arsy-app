@extends('adminlte::page')

@section('title', 'Laporan Pengeluaran | Dmasgroup')

@section('content_header')
    <h1>Laporan Pengeluaran</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @livewire('report.pengeluaran-filter')
                <x-adminlte-card title="Laporan" theme="info" icon="fas fa-th-list">
                    @livewire('report.pengeluaran-table')
                </x-adminlte-card>
            </div>
        </div>
        
    </div>
@stop

@section('css')
    @livewireStyles
    <script src="//unpkg.com/alpinejs" defer></script>
@stop
@section('plugins.DateRangePicker', true)
@section('js')
    @livewireScripts
@stop
