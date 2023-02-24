<?php

namespace App\Http\Livewire\Report;

use App\Models\Kas;
use App\Models\LayawayDetail;
use Livewire\Component;

class KasBesarTable extends Component
{
    public $kasBesar = [];
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
        
        
        $kasBesar = $layaway->sortBy('updated_at')->toArray();
        $this->kasBesar = array_merge([],$kasBesar);
        $this->grand_total = $layaway_sum;
        $this->date_start = $start;
        $this->date_end = $end;
        // dd($all);
    }
    public function render()
    {
        return view('livewire.report.kas-besar-table');
    }
}
