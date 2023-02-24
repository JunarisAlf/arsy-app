<?php

namespace App\Http\Livewire\Report;

use App\Models\Kas;
use App\Models\LayawayDetail;
use App\Models\Transaction;
use Livewire\Component;

class KasKecilTable extends Component
{
    public $kasKecil = [];
    public $date_start, $date_end, $pengeluaran_grand_total, $pemasukan_grand_total;
    public $grand_total;
    protected $listeners = ['refresh_table' => 'refresh', 'print'];
    public function refresh($start,  $end){
        $pengeluaran = Transaction::where('status','cash')
            ->whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->get();
        $pengeluaran_sum = $pengeluaran->sum('final_price');

        $kas = Kas::whereDate('created_at', '>=', $start)
            ->whereDate('created_at', '<=', $end)
            ->orderBy('created_at', 'ASC')
            ->get();
        $kas_sum = $kas->sum('jumlah');

        $all = $pengeluaran->merge($kas);
        $all = $all->sortBy('updated_at')->toArray();
        $this->kasKecil = array_merge([], $all);

        $this->pengeluaran_grand_total = $pengeluaran_sum;
        $this->pemasukan_grand_total = $kas_sum;
        $this->grand_total = $this->pemasukan_grand_total - $this->pengeluaran_grand_total;
        $this->date_end = $end;
    }
    public function render()
    {
        return view('livewire.report.kas-kecil-table');
    }
}
