<div class="table-responsive">
    <a  href="{{route('both_cetak', compact('date_start', 'date_end') )}}" class="btn btn-warning mb-4" target="_blank"> <i class="fas fa-print"></i>  Cetak</a>
    <table  class="table-bordered table" style="width: 100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>DEBIT</th>
                <th>KREDIT</th>
            </tr>
        </thead>    
        <tbody>
            @php  $i = 0;   @endphp
            @foreach ($both as  $bth)
            @php $i++; @endphp
            <tr>
                <td>{{$i}}</td>
                <td>
                    {{-- {{ date('d/m/Y', strtotime($bth['updated_at']))}} --}}
                    @if (array_key_exists('final_price', $bth))
                        {{ date('d/m/Y', strtotime($bth['created_at']))}}
                    @elseif(array_key_exists('paid', $bth))   
                        {{ date('d/m/Y', strtotime($bth['paid_at']))}}
                    @endif
                </td>
                <td>
                    @if (array_key_exists('final_price', $bth))
                        {{$bth['name']}} {{ '@'.$bth['quantity']}} {{$bth['unit']}}
                    @elseif(array_key_exists('paid', $bth))   
                        Angsuran ke-{{$bth['month']}} | {{$bth['layaway']['customer_name']}} | {{$bth['layaway']['project']}} {{$bth['layaway']['block']}}
                    @endif
                </td>
                <td>
                    @if(array_key_exists('paid', $bth))   
                        {{number_format($bth['paid'],2,'.',',')}}
                    @endif
                </td>
                <td>
                    @if (array_key_exists('final_price', $bth))
                        {{number_format($bth['final_price'],2,'.',',')}}
                    @endif
                </td>
            </tr>
            @endforeach

            <tr class="text-center text-bold">
                <td colspan="3" >TOTAL</td>
                <td>Rp. {{number_format($pemasukan_grand_total,2,'.',',')}}</td>
                <td>Rp. {{number_format($pengeluaran_grand_total,2,'.',',')}}</td>
            </tr>
            <tr class="text-center text-bold">
                <td colspan="3" >GRAND TOTAL</td>
                <td colspan="2">Rp. {{number_format($grand_total,2,'.',',')}}</td>
            </tr>
        </tbody>
    </table>
</div>
