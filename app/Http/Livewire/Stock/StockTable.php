<?php

namespace App\Http\Livewire\Stock;

use App\Models\Stock;
use Livewire\Component;

class StockTable extends Component{
    public $stocks = [];
    public function mount(){
        $this->stocks = Stock::orderBy('updated_at', 'DESC')->get();
    }

    protected $listeners = ['refresh_stocks_table' => 'refresh'];
    public function refresh(){
        $this->stocks = Stock::orderBy('updated_at', 'DESC')->get();
    }
    public function delete($id, $name){
        $this->emit('delete_stock', $id, $name);
    }
    public function update($id){
        $this->emit('update_stock', $id); //UpdateItemCategory
    }
    public function updateTotalStock($id, $name){
        $this->emit('update_total_stock', $id, $name); //UpdateItemCategory
    }
    public function render(){
        return view('livewire.stock.stock-table');
    }
}
