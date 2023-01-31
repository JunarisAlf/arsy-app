<?php

namespace App\Http\Livewire\Trx;

use App\Models\Transaction;
use Livewire\Component;

class TransactionTable extends Component{
    public $trxs = [];
    public function mount(){
        $this->trxs = Transaction::latest()->get();
    }
    protected $listeners = ['refresh_trxs_table' => 'refresh'];
    public function refresh(){
        $this->trxs = Transaction::latest()->get();
    }
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
