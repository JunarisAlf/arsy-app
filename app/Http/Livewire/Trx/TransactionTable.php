<?php

namespace App\Http\Livewire\Trx;

use App\Models\Transaction;
use Carbon\Carbon;
use Livewire\Component;

class TransactionTable extends Component{
    public $trxs = [];
    public $minimumDate;
    public $date_start, $date_end;

    public function mount(){
        $this->minimumDate = Carbon::now()->subDays(7)->format('Y-m-d H:i:s');
        $this->date_start =  Carbon::now()->format('Y-m-d');
        $this->date_end =  Carbon::now()->format('Y-m-d');
        // $this->date_range = $this->date_start . '|' . $this->date_end;

        $this->trxs = Transaction::where('status', '!=', 'lunas')
            ->whereDate('created_at','>=', $this->date_start )
            ->whereDate('created_at','<=', $this->date_end )
            ->latest()->get();
        }
    protected $listeners = ['refresh_trxs_table' => 'refresh', 'dateChange' => 'dateChange'];
    public function refresh(){
        $this->minimumDate = Carbon::now()->subDays(7)->format('Y-m-d H:i:s');
        $this->date_start =  Carbon::now()->format('Y-m-d');
        $this->date_end =  Carbon::now()->format('Y-m-d');
        $this->trxs = Transaction::where('status', '!=', 'lunas')
            ->whereDate('created_at','>=', $this->date_start )
            ->whereDate('created_at','<=', $this->date_end )
            ->latest()->get();
    }
    public function dateChange($date_range){
        $date = explode('|',$date_range);
        $date_start = $date[0];
        $date_end = $date[1];
        $this->trxs = Transaction:: where('status', '!=', 'lunas')
            ->whereDate('created_at','>=', $date_start )
            ->whereDate('created_at','<=', $date_end )
            ->latest()->get();
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
