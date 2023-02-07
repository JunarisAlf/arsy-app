<?php

namespace App\Http\Livewire\Contractor;

use App\Models\Contractor;
use Livewire\Component;

class ContractorTable extends Component{
    public $contractors = [];
    protected $listeners = ['refresh_contractors_table' => 'refresh'];
    public function refresh(){
        $this->contractors = Contractor::latest()->get();
    }
    public function mount(){
        $this->contractors = Contractor::latest()->get();
    }
  
    public function detail($id, $name){
        $this->emit('detail_contractor', $id, $name); 
    }
    public function render(){
        return view('livewire.contractor.contractor-table');
    }
}
