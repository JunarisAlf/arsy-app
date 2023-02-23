<div>
    <div class="table-responsive">
    <table class="table table-bordered" style="width: 100%">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Catatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kas_masuk as $kas)
            <tr>
                <td>
                    <button type="button" class="btn btn-sm btn-block btn-outline-warning">
                        {{ date_format($kas->created_at, 'd/m/Y H:i')}}
                    </button>
                </td>
                <td>Rp. {{ number_format($kas->jumlah,2,',','.')}}</td>
                <td>{{$kas->note}}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

</div>

