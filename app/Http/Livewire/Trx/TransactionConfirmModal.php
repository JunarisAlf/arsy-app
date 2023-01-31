<?php

namespace App\Http\Livewire\Trx;

use App\Models\Transaction;
use Livewire\Component;

class TransactionConfirmModal extends Component
{
    public $show = 'hidden';
    public $name, $trx_id;

    protected $listeners = ['delete_trx' => 'confirm'];

    public function confirm($id, $name){
        $this->show = 'block';
        $this->trx_id = $id;
        $this->name = $name;
    }
    public function delete($id){
        Transaction::destroy($id);
        $this->show = 'hidden';
        $this->emit('refresh_trxs_table');
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil meghapus data transaksi '. $this->name,
            'theme' => 'info',
            'title' => 'Info'
        ]);
    }

    public function render(){
        return view('livewire.trx.transaction-confirm-modal');
    }
}
