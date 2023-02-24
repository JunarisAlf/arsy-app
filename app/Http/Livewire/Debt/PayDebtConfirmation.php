<?php

namespace App\Http\Livewire\Debt;

use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class PayDebtConfirmation extends Component
{
    public $show = 'hidden';
    public $trx_id, $name, $final_price;

    protected $listeners = ['pay_debt' => 'confirm'];

    public function confirm($id){
        $trx = Transaction::find($id);
        $this->trx_id = $trx->id;
        $this->name = $trx->name;
        $this->final_price = $trx->final_price;
        $this->show = 'block';
    }
    public function pay($id){
        $trx = Transaction::find($id);
        $trx_latest = Transaction::latest()->first();
        $new_trx = $trx->replicate(['note', 'jatuh_tempo'])->fill([
            'status' => 'cash',
            'note' => 'Bayar Hutang'
        ]);
        // dd($new_trx);

        DB::transaction(function () use ($trx, $new_trx){
            $trx->status = 'lunas';
            $trx->paid_at = date('Y-m-d H:i:s');
            $trx->save();
            $new_trx->save();
        });
        $this->show = 'hidden';
        $this->emit('refresh_debt_table');
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil!',
            'theme' => 'info',
            'title' => 'Info'
        ]);
    }

    public function render()
    {
        return view('livewire.debt.pay-debt-confirmation');
    }
}
