<?php

namespace App\Http\Livewire\Stock;

use App\Models\ItemCategory;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ModifyStock extends Component{
    public $show = 'hidden';

    public $stock_id, $name, $note, $quantity;
    protected $listeners = ['update_total_stock' => 'updateModal'];

    public function updateModal($id,$name){
        $this->stock_id = $id;
        $this->name = $name;
        $this->show = 'block';
    }

    public function update($id){
        $this->validate(['quantity' => 'required|numeric|min:1']);
        $stock = Stock::find($id);
        DB::transaction(function() use ($stock){
            $stock->quantity += $this->quantity;
            $stock->save();
            $stock->histories()->create([
                'alocate_to' => 'gudang',
                'action' => 'in',
                'quantity' => $this->quantity,
                'note' => $this->note
            ]);
        });

        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil menambah stok '. $this->name . ' sejumlah '.$this->quantity,
            'theme' => 'info',
            'title' => 'Info'
        ]);
        $this->emit('refresh_stocks_table');
        $this->emit('refresh_alocations_table');
        $this->reset();
        $this->show = 'hidden';

    }
    public function render(){
        return view('livewire.stock.modify-stock');
    }
}
