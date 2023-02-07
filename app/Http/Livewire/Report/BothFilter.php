<?php

namespace App\Http\Livewire\Report;

use Carbon\Carbon;
use Livewire\Component;

class BothFilter extends Component{
    public $date_range;
    public function mount(){
        $this->date_range =  Carbon::now()->startOfMonth()->format('Y-m-d') . '|' . Carbon::now()->endOfMonth()->format('Y-m-d');
    }
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
    public function render(){
        return view('livewire.report.both-filter');
    }
}
