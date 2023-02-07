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
    <h2 class="text-center">LAPORAN PENGELUARAN</h2>
    <h4 class="text-center">Periode: {{request()->date_start .' - '.request()->date_end }}</h4>
    <div class="table-responsive my-4">
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
                        {{$trx['name']}} {{ '@'.$trx['quantity']}} {{$trx->unit}}
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
    
</body>
</html>