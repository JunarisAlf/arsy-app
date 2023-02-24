<div class="table-responsive">
    <a  href="{{route('kasBesar_cetak', compact('date_start', 'date_end') )}}" class="btn btn-warning mb-4" target="_blank"> <i class="fas fa-print"></i>  Cetak</a>
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

            @php  $i = 0;   @endphp
            @foreach ($kasBesar as  $pem)
            @php $i++; @endphp
            <tr>
                <td>{{$i}}</td>

                <td>
                    {{-- {{ date('d/m/Y', strtotime($bth['updated_at']))}} --}}
                    @if (array_key_exists('jumlah', $pem))
                        {{ date('d/m/Y', strtotime($pem['created_at']))}}
                    @elseif(array_key_exists('layaway_id', $pem))   
                        {{ date('d/m/Y', strtotime($pem['paid_at']))}}
                    @endif
                </td>

                <td>
                    @if (array_key_exists('jumlah', $pem))
                        {{$pem['note']}}
                    @elseif(array_key_exists('layaway_id', $pem))   
                        Angsuran ke-{{$pem['month']}} | {{$pem['layaway']['customer_name']}} | {{$pem['layaway']['project']}} {{$pem['layaway']['block']}}
                    @endif
                </td>

                <td>
                    @if (array_key_exists('jumlah', $pem))
                        {{number_format($pem['jumlah'],2,'.',',')}}
                    @elseif(array_key_exists('layaway_id', $pem))   
                        {{number_format($pem['paid'],2,'.',',')}}
                    @endif
                </td>

            </tr>
            @endforeach

            <tr class="text-center text-bold">
                <td colspan="3" >TOTAL</td>
                <td>Rp. {{number_format($grand_total,2,'.',',')}}</td>
            </tr>
        </tbody>
    </table>
</div>
