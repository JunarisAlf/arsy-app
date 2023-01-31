<div class="table-responsive">
    <table class="table table-bordered" style="width: max-content">
        <thead>
            <tr>
                <th>Tanggal Pembelian</th>
                <th>Tanggal Pembayaran</th>
                <th>Jatuh Tempo</th>
                <th>Keterangan</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Harga Total</th>
                <th>Catatan</th>
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
                
                <td>
                    <button type="button" class="btn btn-sm btn-block btn-outline-danger">
                        {{ date('d/m/Y', strtotime($trx->paid_at))}}
                    </button>
                </td>

                <td>
                    @if ($trx->jatuh_tempo)
                        <button type="button" class="btn btn-sm btn-block btn-outline-danger">
                            {{ date('d/m/Y', strtotime($trx->jatuh_tempo))}}
                        </button>
                    @endif 
                </td>
                
                <td>{{$trx->name}}</td>
                <td>{{$trx->quantity}} {{$trx->unit}}</td>
                <td>Rp. {{ number_format($trx->price,2,',','.')}}</td>
                <td>Rp. {{number_format($trx->final_price,2,',','.')}}</td>
              
                <td>{{$trx->note}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
