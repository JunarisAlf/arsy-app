<?php

namespace App\Http\Controllers;

use App\Models\ContractorDetail;
use App\Models\Kas;
use App\Models\LayawayDetail;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $layaway_sum = LayawayDetail::where('paid', '!=', null)->sum('paid');
        $kas_sum = Kas::all()->sum('jumlah');
        $pemasukan = $layaway_sum + $kas_sum;

        $trx_sum = Transaction::where('status', '!=', 'hutang')->sum('final_price');
        $contractor_sum = ContractorDetail::where('pay', '!=', null)->sum('pay');
        $pengeluaran = $trx_sum + $contractor_sum;

        $hutang = Transaction::where('status', 'hutang')->get();
        $startOfMonth =  Carbon::now()->startOfMonth()->format('Y-m-d');
        $endOfMonth =  Carbon::now()->endOfMonth()->format('Y-m-d');
        $angsuran = LayawayDetail::where('paid', null)->whereBetween('jatuh_tempo', [$startOfMonth, $endOfMonth])->get();
        return view('pages.home', compact('pemasukan', 'pengeluaran', 'hutang', 'angsuran'));
    }
}
