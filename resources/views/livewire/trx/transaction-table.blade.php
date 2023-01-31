<div class="table-responsive">
    <table class="table table-bordered" style="width: max-content">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Harga Total</th>
                <th>Status Pembayaran</th>
                <th>Jatuh Tempo</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trxs as $trx)
            <tr>
                <td>
                    <button type="button" class="btn btn-sm btn-block btn-outline-warning">
                        {{ date_format($trx->created_at, 'd/m/Y H:i')}}
                    </button>
                </td>
                <td>{{$trx->name}}</td>
                <td>{{$trx->quantity}} {{$trx->unit}}</td>
                <td>Rp. {{ number_format($trx->price,2,',','.')}}</td>
                <td>Rp. {{number_format($trx->final_price,2,',','.')}}</td>
                <td>
                    @if ($trx->status == 'cash')
                        <button type="button" class="btn btn-sm btn-block btn-outline-info">
                            CASH
                        </button>
                    @elseif ($trx->status == 'hutang')
                        <button type="button" class="btn btn-sm btn-block btn-outline-danger">
                            HUTANG
                        </button>
                    @else
                        <button type="button" class="btn btn-sm btn-block btn-outline-succes">
                            LUNAS
                        </button>
                    @endif
                    
                </td>
                <td>
                    @if ($trx->jatuh_tempo)
                        <button type="button" class="btn btn-sm btn-block btn-outline-danger">
                            {{ date('d/m/Y', strtotime($trx->jatuh_tempo))}}
                        </button>
                    @endif 
                </td>
                <td>{{$trx->note}}</td>
                <td>
                    @if ($trx->status == 'hutang' || $trx->id == $trx_latest->id)
                        <x-adminlte-button class="btn-sm" theme="warning" icon="fas fa-pencil-alt"
                        wire:click="update({{$trx->id}})"/>
                        <x-adminlte-button class="btn-sm" theme="danger" icon="fas fa-trash-alt"
                        wire:click="delete({{$trx->id}}, '{{$trx->name}}')"/>
                    @endif
                    
                </td>
            </tr>
            @endforeach
            
            
            
        </tbody>
    </table>
</div>
