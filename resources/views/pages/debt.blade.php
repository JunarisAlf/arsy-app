@extends('adminlte::page')

@section('title', 'Daftar Hutang | Dmasgroup')

@section('content_header')
    @livewire('debt.pay-debt-confirmation')
    @livewire('debt.update-debt')
    @livewire('alert.simple-alert')
    <h1>Daftar Hutang </h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                {{-- @livewire('debt.add-debt') --}}
                <x-adminlte-card title="Daftar Hutang" theme="success" icon="fas fa-th-list">
                    @livewire('debt.debt-table')
                </x-adminlte-card>
                <x-adminlte-card title="Daftar Hutang Sudah Lunas" theme="info" icon="fas fa-th-list">
                    @livewire('debt.debt-finish-table')
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
