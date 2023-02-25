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
    <h2 class="text-center">Kas Besar</h2>
    <h4 class="text-center">Periode: {{request()->date_start .' sd. '.request()->date_end }}</h4>
    <div class="table-responsive my-4">
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
    
</body>
</html>