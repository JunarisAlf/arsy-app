<div class="table-responsive">
    @if ($show)
    <table class="table-bordered table" style="width: 100%">
        <thead>
            <tr >
                <th colspan="6" class="text-center">{{$customer_name}}</th>
            </tr>
            <tr>
                <th>Bulan ke-</th>
                <th>Jatuh Tempo</th>
                <th>Pembayaran</th>
                <th>Tanggal Bayar</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($details as $detail)
            <tr>
                <td>{{$detail->month}}</td>
                <td>
                    <button type="button" class="btn btn-sm btn-block btn-outline-warning">
                        {{ date('d/m/Y', strtotime($detail->jatuh_tempo))}}
                    </button>
                </td>

                <td>
                    Rp. {{ number_format($detail->paid,2,',','.')}}
                </td>
                <td>
                    @if ($detail->paid_at)
                        <button type="button" class="btn btn-sm btn-block btn-outline-success">
                             {{ date('d/m/Y', strtotime($detail->paid_at))}}
                        </button> 
                    @endif
                </td>
                <td>{{$detail->note}}</td>
                <td>
                    {{-- <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt" wire:click="update({{$detail->id}})" /> --}}
                    @if ($detail->paid_at == null && !$detail->layaway->is_finish)
                        <x-adminlte-button label="Bayar" theme="info" icon="fas fa-dollar-sign" wire:click="pay({{$detail->id}})" />
                    @endif
                </td>
            </tr>
            @endforeach
            
            
            
            
        </tbody>
    </table>
    @endif
   
</div>
