<?php

namespace App\Http\Livewire\Report;

use App\Models\Kas;
use App\Models\LayawayDetail;
use App\Models\Transaction;
use Livewire\Component;

class PemasukanTable extends Component{
    public $pemasukan = [];
    public $date_start, $date_end;
    public $grand_total;
    protected $listeners = ['refresh_table' => 'refresh', 'print'];
    public function refresh($start,  $end){
        $layaway = LayawayDetail::with(['layaway'])->where('paid','!=','null')
            ->whereDate('paid_at', '>=', $start)
            ->whereDate('paid_at', '<=', $end)
            ->orderBy('updated_at', 'ASC')
            ->get();
        $layaway_sum = $layaway->sum('paid');
        
        $kas = Kas::whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->orderBy('created_at', 'ASC')
            ->get();
        $kas_sum = $kas->sum('jumlah');
        $all = $layaway->merge($kas);
        $all = $all->sortBy('updated_at')->toArray();
        $this->pemasukan = array_merge([],$all);
        $this->grand_total = $layaway_sum + $kas_sum;
        $this->date_start = $start;
        $this->date_end = $end;
        // dd($all);
    }
   
    public function render() {
        return view('livewire.report.pemasukan-table');
    }
}
