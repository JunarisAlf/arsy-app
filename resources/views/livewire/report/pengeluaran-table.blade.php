<div class="table-responsive">
    <a  href="{{route('pengeluaran_cetak', compact('date_start', 'date_end') )}}" class="btn btn-warning mb-4" target="_blank"> <i class="fas fa-print"></i>  Cetak</a>
    <table  class="table-bordered table" style="width: 100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Pengeluaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trxs as $key => $trx)
            <tr>
                <td>{{$key+1}}</td>
                {{-- <td>{{ date_format($trx['created_at'], 'd/m/Y H:i')}}</td> --}}
                <td>
                    {{ date('d/m/Y', strtotime($trx['created_at']))}}
                </td>
                <td>
                    {{$trx['name']}} {{ '@'.$trx['quantity']}} {{$trx['unit']}}
                </td>
                <td>{{number_format($trx['final_price'],2,'.',',')}}</td>
            </tr>
            @endforeach
            <tr class="text-center text-bold">
                <td colspan="3" >TOTAL</td>
                <td>Rp. {{number_format($grand_total,2,'.',',')}}</td>
            </tr>
        </tbody>
    </table>
</div>
