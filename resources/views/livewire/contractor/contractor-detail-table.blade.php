<div class="table-responsive">
    @if ($show)
    <table class="table-bordered table" style="width: 100%">
        <thead>
            <tr >
                <th colspan="6" class="text-center">{{$contractor_name}}</th>
            </tr>
            <tr>
                <th>Pembayaran Ke-</th>
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
                <td>{{$detail->periode}}</td>
                <td>
                    <button type="button" class="btn btn-sm btn-block btn-outline-warning">
                        {{ date('d/m/Y', strtotime($detail->jatuh_tempo))}}
                    </button>
                </td>
                <td>
                    Rp. {{ number_format($detail->pay,2,',','.')}}
                </td>
                <td>
                    @if ($detail->payment_date)
                        <button type="button" class="btn btn-sm btn-block btn-outline-success">
                             {{ date('d/m/Y', strtotime($detail->payment_date))}}
                        </button> 
                    @endif
                </td>
                <td>{{$detail->note}}</td>
                <td>
                    @if ($detail->payment_date == null)
                        <x-adminlte-button label="Bayar" theme="info" icon="fas fa-dollar-sign" wire:click="pay({{$detail->id}})" />
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
   
</div>
