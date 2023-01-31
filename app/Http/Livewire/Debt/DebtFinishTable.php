<?php

namespace App\Http\Livewire\Debt;

use App\Models\Transaction;
use Livewire\Component;

class DebtFinishTable extends Component{
    public $trxs = [];
    public function mount(){
        $this->trxs = Transaction::where('status', 'lunas')->latest()->get();
    }
    protected $listeners = ['refresh_debt_table' => 'refresh'];
    public function refresh(){
        $this->trxs = Transaction::where('status', 'lunas')->latest()->get();
    }
    
    public function render(){
        return view('livewire.debt.debt-finish-table');
    }
}
