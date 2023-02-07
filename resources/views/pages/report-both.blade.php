@extends('adminlte::page')

@section('title', 'Laporan Pemasukan & Pengeluaran | Dmasgroup')

@section('content_header')
    <h1>Laporan Pemasukan & Pengeluaran</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @livewire('report.both-filter')
                <x-adminlte-card title="Laporan" theme="info" icon="fas fa-th-list">
                    @livewire('report.both-table')
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
