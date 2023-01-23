<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class TrxTypeTable extends Component{

    public function delete(){
        $this->emit('delete_trx_type'); //TrxTypeConfirmModal
    } 
    public function update(){
        $this->emit('update_trx_type'); //TrxTypeCategory
        
    }
    public function render(){
        return view('livewire.category.trx-type-table');
    }
}
