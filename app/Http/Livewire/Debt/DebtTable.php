<?php

namespace App\Http\Livewire\Debt;

use App\Models\Transaction;
use Livewire\Component;

class DebtTable extends Component{
    public $trxs = [];
    public function mount(){
        $this->trxs = Transaction::where('status', 'hutang')->latest()->get();
    }
    public function delete(){
        $this->emit('delete_debt');
    }
    public function update(){
        $this->emit('update_debt'); //UpdateItemCategory
        
    }
    public function render(){
        return view('livewire.debt.debt-table');
    }
}
