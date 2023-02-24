<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('vendor/adminlte/dist/css/adminlte.min.css')}}">
    <title>Laporan</title>
</head>
<body class="p-4">
    <h2 class="text-center">LAPORAN PEMASUKAN</h2>
    <h4 class="text-center">Periode: {{request()->date_start .' sd. '.request()->date_end }}</h4>
    <div class="table-responsive my-4">
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
                @foreach ($kasKecil as  $bth)
                @php $i++; @endphp
                <tr>
                    <td>{{$i}}</td>
                    <td>
                        {{-- {{ date('d/m/Y', strtotime($bth['updated_at']))}} --}}
                        @if (array_key_exists('final_price', $bth))
                            {{ date('d/m/Y', strtotime($bth['created_at']))}}
                        @elseif(array_key_exists('paid', $bth))   
                            {{ date('d/m/Y', strtotime($bth['paid_at']))}}
                        @elseif(array_key_exists('jumlah', $bth))   
                            {{ date('d/m/Y', strtotime($bth['created_at']))}}
                        @endif
                    </td>
                    <td>
                        @if (array_key_exists('final_price', $bth))
                            {{$bth['name']}} {{ '@'.$bth['quantity']}} {{$bth['unit']}}
                        @elseif(array_key_exists('paid', $bth))   
                            Angsuran ke-{{$bth['month']}} | {{$bth['layaway']['customer_name']}} | {{$bth['layaway']['project']}} {{$bth['layaway']['block']}}
                        @elseif(array_key_exists('jumlah', $bth))   
                            {{$bth['note']}}
                        @endif
                    </td>
                    <td>
                        @if (array_key_exists('jumlah', $bth))
                            {{number_format($bth['jumlah'],2,'.',',')}}
                        @elseif(array_key_exists('layaway_id', $bth))   
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
    
</body>
</html>