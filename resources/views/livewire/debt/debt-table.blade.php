<div class="table-responsive">
    <table class="table table-bordered" style="width: max-content">
        <thead>
            <tr>
                <th>Jatuh Tempo</th>
                <th>Tanggal Pembelian</th>
                <th>Keterangan</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Harga Total</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trxs as $trx)
            <tr>
                <td>
                    @if ($trx->jatuh_tempo)
                        <button type="button" class="btn btn-sm btn-block btn-outline-danger">
                            {{ date('d/m/Y', strtotime($trx->jatuh_tempo))}}
                        </button>
                    @endif 
                </td>
                <td>
                    <button type="button" class="btn btn-sm btn-block btn-outline-warning">
                        {{ date_format($trx->created_at, 'd/m/Y H:i')}}
                    </button>
                </td>
                <td>{{$trx->name}}</td>
                <td>{{$trx->quantity}} {{$trx->unit}}</td>
                <td>Rp. {{ number_format($trx->price,2,',','.')}}</td>
                <td>Rp. {{number_format($trx->final_price,2,',','.')}}</td>
              
                <td>{{$trx->note}}</td>
                <td>
                    <x-adminlte-button label="Tandai Lunas" theme="info" icon="fas fa-check" wire:click="delete()" />
                    <x-adminlte-button label="Edit" theme="warning" icon="fas fa-pencil-alt"
                    wire:click="update()"/>
                    <x-adminlte-button label="Hapus" theme="danger" icon="fas fa-trash-alt"
                    wire:click="delete()"/>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
