<?php

namespace App\Http\Livewire\Stock;

use Livewire\Component;

class StockTable extends Component{
    public function delete(){
        $this->emit('delete_stock');
    }
    public function update(){
        $this->emit('update_stock'); //UpdateItemCategory
        
    }
    public function render(){
        return view('livewire.stock.stock-table');
    }
}
