<?php

namespace App\Http\Livewire\Report;

use App\Models\Transaction;
use Livewire\Component;

class PengeluaranTable extends Component{
    public $trxs = [];
    public $date_start, $date_end;
    public $grand_total;
    protected $listeners = ['refresh_table' => 'refresh', 'print'];
    public function refresh($trxs,  $grand_total){
        $this->trxs = $trxs;
        $this->grand_total = $grand_total;
    }
    public function print($start, $end){
        $this->date_start = $start;
        $this->date_end = $end;
    }
    public function render() {
        return view('livewire.report.pengeluaran-table');
    }
}
