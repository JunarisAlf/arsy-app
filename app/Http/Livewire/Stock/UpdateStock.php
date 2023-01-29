<?php

namespace App\Http\Livewire\Stock;

use App\Models\ItemCategory;
use App\Models\Stock;
use Livewire\Component;

class UpdateStock extends Component{
    public $show = 'hidden';
    public $categories = [];
    public function mount(){
        $this->categories = ItemCategory::all();
    }
    public $stock_id, $name, $category_id, $unit, $note, $quantity;
    protected $listeners = ['update_stock' => 'updateModal'];

    public function updateModal($id){
        $this->stock_id = $id;
        $stock = Stock::find($id);
        $this->name = $stock->name;
        $this->category_id = $stock->category_id;
        $this->unit = $stock->unit;
        $this->quantity = $stock->quantity;
        $this->note = $stock->note;

        $this->show = 'block';
    }

    public function update($id){
        $stock = Stock::find($id);
        $stock->name = $this->name;
        $stock->category_id = $this->category_id;
        $stock->unit = $this->unit;
        // $stock->quantity = $this->quantity;
        $stock->note = $this->note;
        $stock->save();

        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil mengupdate data '. $this->name,
            'theme' => 'info',
            'title' => 'Info'
        ]);
        $this->emit('refresh_stocks_table');
        $this->show = 'hidden';

    }
    public function render(){
        return view('livewire.stock.update-stock');
    }
}
