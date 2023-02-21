@extends('adminlte::page')

@section('title', 'Stock Barang | Dmasgroup')

@section('content_header')
    @livewire('stock.stock-confirm-modal')
    @livewire('stock.alocation-confirm-modal')
    @livewire('stock.update-stock')
    @livewire('stock.modify-stock')
    @livewire('stock.update-alocation')
    @livewire('alert.simple-alert')
    <h1>Stock Barang </h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                @livewire('stock.add-stock')
                <x-adminlte-card title="Daftar Stock Barang" theme="success" icon="fas fa-boxes">
                    @livewire('stock.stock-table')
                </x-adminlte-card>
            </div>
            <div class="col-md-6">
                @livewire('stock.add-alocation')
                <x-adminlte-card title="Daftar Alokasi Barang" theme="primary" icon="fas fa-share-alt">
                    @livewire('stock.alocation-table')
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
