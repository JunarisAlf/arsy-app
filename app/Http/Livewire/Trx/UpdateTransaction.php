<?php

namespace App\Http\Livewire\Trx;

use App\Models\Transaction;
use App\Models\TrxType;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdateTransaction extends Component{
    public $show = 'hidden', $trx_id, $type_id, $name, $quantity, $unit, $status, $price, $final_price, $jatuh_tempo, $note;

    public $trx_types = [];
    public function mount(){
        $this->trx_types = TrxType::where('cash_flow', 'out')->orderBy('name', 'ASC')->get();
    }
    protected $listeners = ['datePickerChange', 'update_trx' => 'updateModal'];
    public function datePickerChange($date){
        $this->jatuh_tempo = $date;
    }

    public function finalPrice(){
        if( $this->quantity && $this->price ){
            $this->final_price = $this->quantity * $this->price;
        }
    }
    public function updateModal($id){
        $trx = Transaction::find($id);
        $this->trx_id = $id;
        $this->name = $trx->name;
        $this->type_id = $trx->type_id;
        $this->quantity = $trx->quantity;
        $this->unit = $trx->unit;
        $this->price = $trx->price;
        $this->final_price = $trx->final_price;
        $this->status = $trx->status;
        $this->jatuh_tempo = $trx->jatuh_tempo;
        $this->note = $trx->note;

        $this->show = 'block';
    }

    public function update($id){
         if($this->status != 'hutang'){
            $this->jatuh_tempo = null;
        }
        $validated = $this->validate([
            'type_id' => 'required',
            'name' => 'required',
            'quantity' => 'required',
            'unit' => 'required',
            'price' => 'required',
            'final_price' => 'required',
            'status' => 'required',
            'jatuh_tempo' => Rule::requiredIf(fn () => $this->status == 'hutang'),
            'note' => 'nullable'
        ]);
        $trx = Transaction::find($id);
        $saldo = $trx->saldo + $trx->final_price - $this->final_price; //undo
        $trx->fill($validated);
        $trx->saldo = $saldo;
        $trx->save();
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil mengupdate data ',
            'theme' => 'info',
            'title' => 'Info'
        ]);
        $this->emit('refresh_trxs_table');
        $this->show = 'hidden';

    }
    public function render(){
        return view('livewire.trx.update-transaction');
    }
}
