<?php

namespace App\Http\Livewire\Stock;

use Livewire\Component;

class AlocationTable extends Component{

    public function delete(){
        $this->emit('delete_alocation'); //TrxTypeConfirmModal
    } 
    public function update(){
        $this->emit('update_alocation'); //TrxTypeCategory
    }
    public function render(){
        return view('livewire.stock.alocation-table');
    }
}
