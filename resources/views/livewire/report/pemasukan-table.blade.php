<div class="table-responsive">
    <a  href="{{route('pemasukan_cetak', compact('date_start', 'date_end') )}}" class="btn btn-warning mb-4" target="_blank"> <i class="fas fa-print"></i>  Cetak</a>
    <table  class="table-bordered table" style="width: 100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Pemasukan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemasukan as $key => $pem)
            <tr>
                <td>{{$key+1}}</td>
                {{-- <td>{{ date_format($pem['created_at'], 'd/m/Y H:i')}}</td> --}}
                <td>
                    {{ date('d/m/Y', strtotime($pem['paid_at']))}}
                </td>
                <td>
                    Angsuran ke-{{$pem['month']}} | {{$pem->layaway->customer_name}} | {{$pem->layaway->project}} {{$pem->layaway->block}}
                </td>
                <td>{{number_format($pem['paid'],2,'.',',')}}</td>
            </tr>
            @endforeach
            <tr class="text-center text-bold">
                <td colspan="3" >TOTAL</td>
                <td>Rp. {{number_format($grand_total,2,'.',',')}}</td>
            </tr>
        </tbody>
    </table>
</div>
