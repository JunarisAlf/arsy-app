<?php

namespace App\Http\Livewire\Stock;

use App\Models\ItemCategory;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddStock extends Component{
    public $categories = [];
    public function mount(){
        $this->categories = ItemCategory::all();
    }
    public $name, $category_id, $unit, $note, $quantity;
    public function store(){
        $this->validate([
            'name' =>'required', 
            'category_id' => 'required', 
            'unit' => 'required',
            'quantity' => 'required|numeric|min:1'
        ]);
        DB::transaction(function(){
            $stock = Stock::create([
                'name' => $this->name,
                'category_id' => $this->category_id,
                'unit' => $this->unit,
                'quantity' => $this->quantity,
                'note' => $this->note,
            ]);
            $stock->histories()->create([
                'alocate_to' => 'gudang',
                'action' => 'in',
                'quantity' => $this->quantity
            ]);
        });
        
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil menambahkan data barang: '. $this->name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
        $this->reset();
        $this->emit('refresh_stocks_table');
        $this->emit('refresh_alocations_table');
        $this->emit('refresh_stocks_opt');


    }
    public function render(){
        return view('livewire.stock.add-stock');
    }
}
