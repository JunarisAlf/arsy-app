@extends('adminlte::page')

@section('title', 'Transaksi Keungan | Dmasgroup')

@section('content_header')
    @livewire('trx.transaction-confirm-modal')
    @livewire('trx.update-transaction')
    @livewire('alert.simple-alert')
    <h1>Transaksi Keuangan</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @livewire('trx.add-transaction')
                <x-adminlte-card title="Laporan Transaksi" theme="success" icon="fas fa-boxes">
                    @livewire('trx.transaction-table')
                </x-adminlte-card>
                
            </div>
        </div>

    </div>
@stop

@section('plugins.TempusDominusBs4', true)
@section('plugins.DateRangePicker', true)
@section('css')
    @livewireStyles
    
    <script src="//unpkg.com/alpinejs" defer></script>
@stop

@section('js')
    @livewireScripts
@stop
