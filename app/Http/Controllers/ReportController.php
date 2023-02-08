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
            ->orderBy('created_at', 'ASC')
            ->get();
        $grand_total = $trxs->sum('final_price');
        return view('pages.print.report-pengeluaran', compact('trxs', 'grand_total'));
    }

    public function pemasukan(){
        return view('pages.report-pemasukan'); 
    }
    public function pemasukanCetak(Request $req){
        $pemasukan = LayawayDetail::where('paid','!=','null')
            ->whereDate('paid_at', '>=', $req->date_start)
            ->whereDate('paid_at', '<=', $req->date_end)
            ->orderBy('paid_at', 'ASC')
            ->get();
        $grand_total = $pemasukan->sum('paid');
        return view('pages.print.report-pemasukan', compact('pemasukan', 'grand_total'));
    }
    public function both(){
        return view('pages.report-both');
    }
    public function bothCetak(Request $req){
        $pengeluaran = Transaction::where('status','cash')
            ->whereDate('created_at', '>=', $req->date_start)
            ->whereDate('created_at', '<=', $req->date_end)
            ->orderBy('created_at', 'ASC')
            ->get();

        $pemasukan =  LayawayDetail::with('layaway')->where('paid','!=','null')
            ->whereDate('paid_at', '>=', $req->date_start)
            ->whereDate('paid_at', '<=', $req->date_end)
            ->orderBy('paid_at', 'ASC')
            ->get();
    
        $pengeluaran_grand_total = $pengeluaran->sum('final_price');
        $pemasukan_grand_total = $pemasukan->sum('paid');
        $grand_total = $pemasukan_grand_total - $pengeluaran_grand_total;
        $both = $pengeluaran->merge($pemasukan);
        $both = $both->sortByDesc('updated_at');
        $both =$both->toArray();
        return view('pages.print.report-both', compact('both', 'grand_total', 'pengeluaran_grand_total', 'pemasukan_grand_total'));
    }


    public function history(){
        return view('pages.report-pengeluaran');
        
    }
}
