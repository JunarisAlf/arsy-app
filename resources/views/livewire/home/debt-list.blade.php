<div class="table-responsive">
    <table class="table-bordered table" style="width: max-content">
        <thead>
            <tr>
                <th>Jatuh Tempo</th>
                <th>Tanggal Pembelian</th>
                <th>Keterangan</th>
                <th>Harga Total</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hutang as $ht)
                <tr>
                    <td>
                        <button type="button" class="btn btn-sm btn-block btn-outline-danger">
                            {{ date('d/m/Y', strtotime($ht->jatuh_tempo))}}
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-block btn-outline-warning">
                            {{ date_format($ht->created_at, 'd/m/Y H:i')}}
                        </button>
                    </td>
                    <td>{{$ht->name}}</td>
                    <td>Rp. {{number_format($ht->final_price,2,',','.')}}</td>
                  
                    <td>{{$ht->note}}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
