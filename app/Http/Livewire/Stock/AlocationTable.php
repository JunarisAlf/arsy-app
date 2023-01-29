<?php

namespace App\Http\Livewire\Stock;

use App\Models\StockHistory;
use Livewire\Component;

class AlocationTable extends Component{
    public $alocations = [];
    public function mount(){
        $this->alocations = StockHistory::orderBy('updated_at', 'DESC')->get();
    }
    protected $listeners = ['refresh_alocations_table' => 'refresh'];
    public function refresh(){
        $this->alocations = StockHistory::orderBy('updated_at', 'DESC')->get();
    }
    public function delete($id){
        $this->emit('delete_alocation', $id); //TrxTypeConfirmModal
    } 
    public function update($id){

        $this->emit('update_alocation', $id); //TrxTypeCategory
    }
    public function render(){
        return view('livewire.stock.alocation-table');
    }
}
