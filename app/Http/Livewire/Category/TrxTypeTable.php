<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class TrxTypeTable extends Component{

    public function delete(){
        $this->emit('delete_trx_type'); //TrxTypeConfirmModal
    } 
    public function update(){
        
    }
    public function render(){
        return view('livewire.category.trx-type-table');
    }
}
