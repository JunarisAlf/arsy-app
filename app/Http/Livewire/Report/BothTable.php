<?php

namespace App\Http\Livewire\Report;

use App\Models\LayawayDetail;
use App\Models\Transaction;
use Livewire\Component;

class BothTable extends Component{
    public $pemasukan = [];
    public $pengeluaran = [];
    public $both = [];

    public $date_start, $date_end;
    public $pengeluaran_grand_total;
    public $pemasukan_grand_total;
    public $grand_total;


    protected $listeners = ['refresh_table' => 'refresh', 'print'];
    public function refresh($start,  $end){
        $this->pengeluaran = Transaction::where('status','cash')
            ->whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->get();

        $this->pemasukan = LayawayDetail::with(['layaway'])->where('paid','!=','null')
            ->whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->get();
        
        $this->pengeluaran_grand_total = $this->pengeluaran->sum('final_price');
        $this->pemasukan_grand_total = $this->pemasukan->sum('paid');
        $this->grand_total = $this->pemasukan_grand_total - $this->pengeluaran_grand_total;
        $both = $this->pengeluaran->merge($this->pemasukan);
        $both = $both->sortByDesc('updated_at');
        $this->both =$both->toArray();
        // dd($this->pengeluaran, $this->pemasukan);
        // dd($both->toArray());
        $this->date_start = $start;
        $this->date_end = $end;
    }
    public function render(){
        return view('livewire.report.both-table');
    }
}
