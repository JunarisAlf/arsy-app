@extends('adminlte::page')

@section('title', 'Kategori | Arsy')

@section('content_header')
    @livewire('category.item-category-confirm-modal')
    @livewire('category.trx-type-confirm-modal')
    @livewire('category.update-item-category')
    @livewire('category.update-trx-type')
    @livewire('alert.simple-alert')
    <h1>Kategori Transaksi</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            {{-- <div class="col-md-6">
                @livewire('category.add-item-category')
                <x-adminlte-card title="Daftar Kategori Barang" theme="success" icon="fas fa-th-list">
                    @livewire('category.item-category-table')
                </x-adminlte-card> --}}
            </div>
            <div class="col-md-12">
                @livewire('category.add-trx-type')
                <x-adminlte-card title="Daftar Tipe Pengeluaran dan Pemasukan" theme="primary" icon="fas fa-wallet">
                    @livewire('category.trx-type-table')
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
