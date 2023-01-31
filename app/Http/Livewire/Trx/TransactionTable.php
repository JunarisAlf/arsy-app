<?php

namespace App\Http\Livewire\Trx;

use App\Models\Transaction;
use Livewire\Component;

class TransactionTable extends Component{
    public $trxs = [];
    public $trx_latest;
    public function mount(){
        $this->trxs = Transaction::latest()->get();
        $this->trx_latest = Transaction::where('status', 'cash')->latest()->first();
    }
    protected $listeners = ['refresh_trxs_table' => 'refresh'];
    public function refresh(){
        $this->trxs = Transaction::latest()->get();
    }
    public function delete($id, $name){
        $this->emit('delete_trx', $id, $name);
    }
    public function update($id){
        $this->emit('update_trx',$id);
    }
    public function render(){
        return view('livewire.trx.transaction-table');
    }
}
