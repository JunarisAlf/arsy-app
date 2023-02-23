<?php

namespace App\Http\Livewire\Report;

use App\Models\Kas;
use App\Models\LayawayDetail;
use App\Models\Transaction;
use Livewire\Component;

class BothTable extends Component{
    public $pemasukan ;
    public $pengeluaran;
    public $both;
    public  $data = [];

    public $date_start, $date_end;
    public $pengeluaran_grand_total;
    public $pemasukan_grand_total;
    public $grand_total;

    public function mount(){
        $this->both = [];
    }

    protected $listeners = ['refresh_table' => 'refresh', 'print'];
    public function refresh($start,  $end){
        $this->pengeluaran = Transaction::where('status','cash')
            ->whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->get();


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

        
        $this->pengeluaran_grand_total = $this->pengeluaran->sum('final_price');
        $this->pemasukan_grand_total = $layaway_sum + $kas_sum;
        $this->grand_total = $this->pemasukan_grand_total - $this->pengeluaran_grand_total;

        $kas = $kas->toArray();
        $layaway = $layaway->toArray();
        $pemasukan = array_merge($kas, $layaway);
        $this->pengeluaran = $this->pengeluaran->toArray();
        $both = array_merge($pemasukan, $this->pengeluaran);

        usort($both, function ($a, $b) {
            return strtotime($a['updated_at']) - strtotime($b['updated_at']);
        });
        $this->both = $both;
        $this->date_start = $start;
        $this->date_end = $end;
    }
    public function render(){
        return view('livewire.report.both-table');
    }
}
