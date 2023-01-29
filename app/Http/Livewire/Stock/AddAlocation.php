<?php

namespace App\Http\Livewire\Stock;

use App\Models\Stock;
use App\Models\StockHistory;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddAlocation extends Component{
    public $projects = [
        ['value' => 'gudang', 'label' => 'Gudang'],
        ['value' => 'abinaya', 'label' => 'Abinaya'],
        ['value' => 'dmashome', 'label' => 'Dmashome'],
        ['value' => 'utama', 'label' => 'Utama'],
    ];
    public $stocks;
    public function mount(){
        $this->stocks = Stock::where('quantity', '>', '0')->orderBy('name', 'ASC')->get();
    }
    protected $listeners = ['refresh_stocks_opt' => 'refreshStock'];
    public function refreshStock(){
        $this->stocks = Stock::orderBy('name', 'ASC')->get();
    }
    public $alocation_id, $stock_id, $alocate_to, $action, $quantity, $note, $current_stock;

    public function stockSelected(){
        $stock_total = Stock::find($this->stock_id)->quantity;
        $this->current_stock = $stock_total;
        $this->quantity = $stock_total;
    }
    public function store(){
        $qtr_rule = 'required|numeric|between:1,'.$this->current_stock;
        $this->validate([
            'stock_id' => 'required',
            'alocate_to' => 'required',
            'quantity' => $qtr_rule
        ]);
        
        DB::transaction(function () {
            $stockHis = StockHistory::create([
                'stock_id' => $this->stock_id,
                'alocate_to' => $this->alocate_to,
                'action' => 'out',
                'quantity' => $this->quantity,
                'note' => $this->note
            ]);
            $stockHis->stock->quantity -= $this->quantity;
            $stockHis->stock->save();
            $this->emit('refresh_alert', [
                'show' => 1, 
                'msg' => 'Berhasil menambahkan data alokasi',
                'theme' => 'success',
                'title' => 'Info'
            ]);
        });
        
        $this->reset();
        $this->stocks = Stock::orderBy('name', 'ASC')->get();

        $this->emit('refresh_alocations_table');
        $this->emit('refresh_stocks_table');


    }
    public function render(){
        return view('livewire.stock.add-alocation');
    }
}
