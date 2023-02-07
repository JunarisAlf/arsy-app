<div class="table-responsive">
    <table class="table-bordered table" style="width: max-content">
        <thead>
            <tr>
                <th>Jatuh Tempo</th>
                <th>Nama</th>
                <th>Angsuran ke-</th>
                <th>Unit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($angsuran as $asr)
            <tr>
                <td>
                    <button type="button" class="btn btn-sm btn-block btn-outline-danger">
                        {{ date('d/m/Y', strtotime($asr->jatuh_tempo))}}
                    </button>
                </td>
                <td> {{$asr->layaway->customer_name}} </td>
                <td>{{$asr->month}}</td>
                <td> {{$asr->layaway->project}} - {{$asr->layaway->block}} </td>
            </tr>
            @endforeach
         
           
        </tbody>
    </table>
</div>
