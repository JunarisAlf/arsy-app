<?php

namespace App\Http\Livewire\Report;

use App\Models\Transaction;
use Livewire\Component;
use Carbon\Carbon;


class PengeluaranFilter extends Component{
    // public $startOfMonth =  Carbon::now()->startOfMonth()->format('Y-m-d');
    // public $endOfMonth =  Carbon::now()->endOfMonth()->format('Y-m-d');
    public $date_range;
    public function mount(){
        $this->date_range =  Carbon::now()->startOfMonth()->format('Y-m-d') . '|' . Carbon::now()->endOfMonth()->format('Y-m-d');
    }
    public $trxs = [];
    protected $listeners = ['dateChange'];
    public function dateChange($date){
        $this->date_range = $date;
    }
    public function apply(){
        $date = explode('|',$this->date_range);
        $date_start = $date[0];
        $date_end = $date[1];
        
        $this->emit('print', $date_start, $date_end);

        $trxs = Transaction::where('status','cash')
            ->whereDate('created_at', '>=', $date_start)
            ->whereDate('created_at', '<=', $date_end)
            ->get();
        $grand_total = $trxs->sum('final_price');
        $this->trxs = $trxs;
        $this->emit('refresh_table', $this->trxs, $grand_total);
    }
    public function render(){
        return view('livewire.report.pengeluaran-filter');
    }
}
