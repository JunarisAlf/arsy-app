<?php

namespace App\Http\Livewire\Kas;

use App\Models\Kas;
use Livewire\Component;

class KasTable extends Component
{
    public $kas_masuk = [];
    public function mount(){
        $this->kas_masuk = Kas::orderBy('created_at', 'DESC')->get();
    }
    protected $listeners = ['refresh_kas_table' => 'refresh'];
    public function refresh(){
        $this->kas_masuk = Kas::orderBy('created_at', 'DESC')->get();
    }
    public function render()
    {
        return view('livewire.kas.kas-table');
    }
}
