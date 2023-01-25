@extends('adminlte::page')

@section('title', 'Hutang dan Cicilan | Arsy')

@section('content_header')
    @livewire('debt.debt-confirm-modal')
    @livewire('debt.layaway-confirm-modal')
    @livewire('debt.update-debt')
    @livewire('debt.update-layaway')
    @livewire('alert.simple-alert')
    <h1>Hutang dan Cicilan</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                {{-- @livewire('debt.add-debt') --}}
                <x-adminlte-card title="Daftar Hutang" theme="success" icon="fas fa-th-list">
                    @livewire('debt.debt-table')
                </x-adminlte-card>
            </div>
            <div class="col-12">
                @livewire('debt.add-layaway')
                <x-adminlte-card title="Daftar Data Pembelian Rumah" theme="primary" icon="fas fa-wallet">
                    @livewire('debt.layaway-table')
                </x-adminlte-card>
                <x-adminlte-card title="Detail Cicilan" theme="primary" icon="fas fa-th-list">
                    <span><strong> Nama: </strong> Fulan bin Bulan</span> <br>
                    @livewire('debt.layaway-detail-table')
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
