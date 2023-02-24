<?php

namespace App\Http\Livewire\Report;

use Carbon\Carbon;
use Livewire\Component;

class KasKecilFilter extends Component
{
    public $date_range, $minDate, $maxDate;
    public function mount(){
        $this->date_range =  Carbon::now()->format('Y-m-d') . '|' . Carbon::now()->format('Y-m-d');
        $this->minDate =  Carbon::now()->subDays(7)->format('d-m-y');
        $this->maxDate = Carbon::now()->format('d-m-y');
    }
    public $pemasukan = [];
    protected $listeners = ['dateChange'];
    public function dateChange($date){
        $this->date_range = $date;
    }
    public function apply(){
        $date = explode('|',$this->date_range);
        $date_start = $date[0];
        $date_end = $date[1];
        $this->emit('refresh_table', $date_start, $date_end);
    }
    public function render()
    {
        return view('livewire.report.kas-kecil-filter');
    }
}
