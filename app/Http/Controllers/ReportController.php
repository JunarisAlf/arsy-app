<?php

namespace App\Http\Controllers;

use App\Models\Kas;
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
        $layaway = LayawayDetail::with(['layaway'])->where('paid','!=','null')
            ->whereDate('paid_at', '>=', $req->date_start)
            ->whereDate('paid_at', '<=', $req->date_end)
            ->orderBy('updated_at', 'ASC')
            ->get();
        $layaway_sum = $layaway->sum('paid');
        
        $kas = Kas::whereDate('created_at', '>=', $req->date_start)
            ->whereDate('created_at', '<=', $req->date_end)
            ->orderBy('created_at', 'ASC')
            ->get();
        $kas_sum = $kas->sum('jumlah');
        $all = $layaway->merge($kas);
        $all = $all->sortBy('updated_at')->toArray();
        $pemasukan = array_merge([],$all);
        $grand_total = $layaway_sum + $kas_sum;
       
        return view('pages.print.report-pemasukan', compact('pemasukan', 'grand_total'));
    }
    public function both(){
        return view('pages.report-both');
    }
    public function bothCetak(Request $req){
        $pengeluaran = Transaction::where('status','cash')
            ->whereDate('created_at', '>=', $req->date_start)
            ->whereDate('created_at', '<=', $req->date_end)
            ->get();


        $layaway = LayawayDetail::with(['layaway'])->where('paid','!=','null')
            ->whereDate('paid_at', '>=', $req->date_start)
            ->whereDate('paid_at', '<=', $req->date_end)
            ->orderBy('updated_at', 'ASC')
            ->get();
        $layaway_sum = $layaway->sum('paid');
        
        $kas = Kas::whereDate('created_at', '>=', $req->date_start)
            ->whereDate('created_at', '<=', $req->date_end)
            ->orderBy('created_at', 'ASC')
            ->get();
        $kas_sum = $kas->sum('jumlah');

        
        $pengeluaran_grand_total = $pengeluaran->sum('final_price');
        $pemasukan_grand_total = $layaway_sum + $kas_sum;
        $grand_total = $pemasukan_grand_total - $pengeluaran_grand_total;

        $kas = $kas->toArray();
        $layaway = $layaway->toArray();
        $pemasukan = array_merge($kas, $layaway);
        $pengeluaran = $pengeluaran->toArray();
        $both = array_merge($pemasukan, $pengeluaran);

        usort($both, function ($a, $b) {
            return strtotime($a['updated_at']) - strtotime($b['updated_at']);
        });
        $both = $both;
        return view('pages.print.report-both', compact('both', 'grand_total', 'pengeluaran_grand_total', 'pemasukan_grand_total'));
    }


    public function history(){
        return view('pages.report-pengeluaran');
        
    }
}
