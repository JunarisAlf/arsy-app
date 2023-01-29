<?php

namespace App\Http\Livewire\Stock;

use App\Models\Stock;
use Livewire\Component;

class StockConfirmModal extends Component
{
    public $show = 'hidden';
    public $stock_id, $name;
    protected $listeners = ['delete_stock' => 'confirm'];

    public function confirm($id, $name){
        $this->stock_id = $id;
        $this->name = $name;
        $this->show = 'block';
    }
    public function delete($id){
        Stock::destroy($id);
        
        $this->show = 'hidden';
        $this->emit('refresh_stocks_table');
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil meghapus data '.$this->name,
            'theme' => 'info',
            'title' => 'Info'
        ]);
    }

    public function render()
    {
        return view('livewire.stock.stock-confirm-modal');
    }
}
