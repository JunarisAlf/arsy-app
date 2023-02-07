<?php

namespace App\Http\Controllers;

use App\Models\LayawayDetail;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $pemasukan = LayawayDetail::where('paid', '!=', null)->sum('paid');
        $pengeluaran = Transaction::where('status', '!=', 'hutang')->sum('final_price');
        $hutang = Transaction::where('status', 'hutang')->get();
        $startOfMonth =  Carbon::now()->startOfMonth()->format('Y-m-d');
        $endOfMonth =  Carbon::now()->endOfMonth()->format('Y-m-d');
        $angsuran = LayawayDetail::where('paid', null)->whereBetween('jatuh_tempo', [$startOfMonth, $endOfMonth])->get();
        return view('pages.home', compact('pemasukan', 'pengeluaran', 'hutang', 'angsuran'));
    }
}
