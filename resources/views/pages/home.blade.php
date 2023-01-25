@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @if (Session::has('success'))
        <x-adminlte-alert class="" theme="info" title="Info" dismissable>
            Selamat datang {{ Auth::user()->full_name }}
        </x-adminlte-alert>
    @endif
    <h1>Dashboard</h1>
@stop

@section('content')
   <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4">
                <x-adminlte-date-range name="date_range" enable-default-ranges="Last 30 Days">
                    <x-slot name="prependSlot">
                        <div class="input-group-text bg-gradient-success">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </x-slot>
                </x-adminlte-date-range>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <x-adminlte-info-box title="Total Saldo" text="Rp. 1.530.252.532" icon="fas fa-lg fa-dollar-sign text-primary"
                theme="gradient-primary" icon-theme="white"/>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <x-adminlte-info-box title="Uang Masuk" text="Rp. 343.498.232" icon="fas fa-lg fa-sign-in-alt text-success"
                theme="gradient-success" icon-theme="white"/>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <x-adminlte-info-box title="Uang Keluar" text="Rp. 549.973.654" icon="fas fa-lg fa-sign-out-alt text-info"
                theme="gradient-info" icon-theme="white"/>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 col-md-6">
                <x-adminlte-card title="Daftar Hutang" theme="warning" icon="fas fa-wallet">
                    @livewire('home.debt-list')
                </x-adminlte-card>
            </div>
            <div class="col-12 col-md-6">
                <x-adminlte-card title="Angsuran bulan ini" theme="dark" icon="fas fa-th-list">
                    @livewire('home.incoming-layaway')
                </x-adminlte-card>
            </div>
        </div>
   </div>
@stop

@section('plugins.DateRangePicker', true)

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop
