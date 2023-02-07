<?php

namespace App\Http\Livewire\Report;

use App\Models\LayawayDetail;
use App\Models\Transaction;
use Livewire\Component;

class PemasukanTable extends Component{
    public $pemasukan = [];
    public $date_start, $date_end;
    public $grand_total;
    protected $listeners = ['refresh_table' => 'refresh', 'print'];
    public function refresh($start,  $end){
        $this->pemasukan = LayawayDetail::where('paid','!=','null')
            ->whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->get();
        $this->grand_total = $this->pemasukan->sum('paid');
        $this->date_start = $start;
        $this->date_end = $end;
    }
   
    public function render() {
        return view('livewire.report.pemasukan-table');
    }
}
