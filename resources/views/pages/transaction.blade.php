@extends('adminlte::page')

@section('title', 'Transaksi Keungan | Arsy')

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
                    <div class="col-6">
                        <x-adminlte-date-range name="date_range" placeholder="Pilih range tanggal untuk ditampilkan" label="Range Tanggal">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-success">
                                    <i class="far fa-lg fa-calendar-alt"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-date-range>
                        @push('js')
                            <script>
                                $(() => $("#drPlaceholder").val(''))
                            </script>
                        @endpush
                    </div>
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
