<?php

namespace App\Http\Controllers;

use App\Models\LayawayDetail;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ReportController extends Controller{
    public function pengeluaran(){
        return view('pages.report-pengeluaran');
    }
    public function pengeluaranCetak(Request $req){
        $trxs = Transaction::where('status','cash')
            ->whereDate('created_at', '>=', $req->date_start)
            ->whereDate('created_at', '<=', $req->date_end)
            ->get();
        $grand_total = $trxs->sum('final_price');
        return view('pages.print.report-pengeluaran', compact('trxs', 'grand_total'));
    }

    public function pemasukan(){
        return view('pages.report-pemasukan'); 
    }
    public function pemasukanCetak(Request $req){
        $pemasukan = LayawayDetail::where('paid','!=','null')
            ->whereDate('created_at', '>=', $req->date_start)
            ->whereDate('created_at', '<=', $req->date_end)
            ->get();
        $grand_total = $pemasukan->sum('paid');
        return view('pages.print.report-pemasukan', compact('pemasukan', 'grand_total'));
    }
    public function both(){
        return view('pages.report-pengeluaran');
        
    }
    public function history(){
        return view('pages.report-pengeluaran');
        
    }
}
