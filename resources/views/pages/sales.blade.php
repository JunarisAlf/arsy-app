@extends('adminlte::page')

@section('title', 'Daftar Penjualan | Dmasgroup')

@section('content_header')
    @livewire('layaway.layaway-confirm-modal')
    @livewire('layaway.update-layaway')
    @livewire('layaway.update-layaway-detail')
    @livewire('alert.simple-alert')
    <h1>Data Penjualan</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @livewire('layaway.add-layaway')
                <x-adminlte-card title="Daftar Data Pembelian Rumah" theme="primary" icon="fas fa-wallet">
                    @livewire('layaway.layaway-table')
                </x-adminlte-card>
                <x-adminlte-card title="Detail Cicilan" theme="primary" icon="fas fa-th-list">
                    <span><strong> Nama: </strong> Fulan bin Bulan</span> <br>
                    @livewire('layaway.layaway-detail-table')
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
