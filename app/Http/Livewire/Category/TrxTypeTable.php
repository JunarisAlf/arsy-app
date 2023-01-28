<?php

namespace App\Http\Livewire\Category;

use App\Models\TrxType;
use Livewire\Component;

class TrxTypeTable extends Component{
    public $trxTypes = [];
    public function mount(){
        $this->trxTypes = TrxType::orderBy('updated_at', 'DESC')->get();
    }

    protected $listeners = ['refresh_trx_types_table' => 'refresh'];
    public function refresh(){
        $this->trxTypes = TrxType::orderBy('updated_at', 'DESC')->get();
    }

    public function delete($id, $name){
        $this->emit('delete_trx_type', $id, $name); //TrxTypeConfirmModal
    } 
    public function update($id, $name){
        $this->emit('update_trx_type', $id); //TrxTypeCategory
        
    }
    public function render(){
        return view('livewire.category.trx-type-table');
    }
}
