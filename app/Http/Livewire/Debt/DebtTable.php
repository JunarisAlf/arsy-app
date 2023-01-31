<?php

namespace App\Http\Livewire\Debt;

use App\Models\Transaction;
use Livewire\Component;

class DebtTable extends Component{
    public $trxs = [];
    public function mount(){
        $this->trxs = Transaction::where('status', 'hutang')->latest()->get();
    }

    protected $listeners = ['refresh_debt_table' => 'refresh'];
    public function refresh(){
        $this->trxs = Transaction::where('status', 'hutang')->latest()->get();
    }
    public function pay($id){
        $this->emit('pay_debt', $id);
    }
    public function update(){
        $this->emit('update_debt'); //UpdateItemCategory
        
    }
    public function render(){
        return view('livewire.debt.debt-table');
    }
}
