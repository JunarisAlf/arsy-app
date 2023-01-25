<?php

namespace App\Http\Livewire\Trx;

use Livewire\Component;

class TransactionTable extends Component{
    public function delete(){
        $this->emit('delete_trx');
    }
    public function update(){
        $this->emit('update_trx'); //UpdateItemCategory
        
    }
    public function render(){
        return view('livewire.trx.transaction-table');
    }
}
