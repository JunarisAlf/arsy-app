<?php

namespace App\Http\Livewire\Debt;

use Livewire\Component;

class LayawayDetailTable extends Component{
    public function delete(){
        $this->emit('delete_layaway_detail'); //TrxTypeConfirmModal
    } 
    public function update(){
        $this->emit('update_layaway_detail'); //TrxTypeCategory
    }
    public function pay(){
        $this->emit('update_layaway_detail'); //TrxTypeCategory
    }
    public function render(){
        return view('livewire.debt.layaway-detail-table');
    }
}