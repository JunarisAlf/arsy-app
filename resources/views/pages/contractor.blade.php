@extends('adminlte::page')

@section('title', 'Daftar Kontraktor | Dmasgroup')

@section('content_header')
    {{-- @livewire('layaway.layaway-confirm-modal') --}}
    @livewire('contractor.contractor-payment-modal')
    {{-- @livewire('layaway.update-layaway-detail') --}}
    @livewire('alert.simple-alert')
    <h1>Kontraktor</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @livewire('contractor.add-contractor')
                <x-adminlte-card title="Daftar Kontraktor" theme="primary" icon="fas fa-wallet">
                    @livewire('contractor.contractor-table')
                </x-adminlte-card>
                <x-adminlte-card title="Detail Cicilan" theme="primary" icon="fas fa-th-list">
                    @livewire('contractor.contractor-detail-table')
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
