<?php

namespace App\Http\Livewire\Debt;

use Livewire\Component;

class LayawayTable extends Component{

    public function delete(){
        $this->emit('delete_layaway'); //TrxTypeConfirmModal
    } 
    public function update(){
        $this->emit('update_layaway'); //TrxTypeCategory
    }
    public function render(){
        return view('livewire.debt.layaway-table');
    }
}
