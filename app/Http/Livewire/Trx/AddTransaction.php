<?php

namespace App\Http\Livewire\Trx;

use App\Models\Transaction;
use App\Models\TrxType;
use Illuminate\Validation\Rule;
use Livewire\Component;

class AddTransaction extends Component{
    public $type_id, $name, $quantity = 0, $unit, $final_price, $price = 0, $note, $status, $jatuh_tempo, $is_hutang, $created_at;
    public $status_opt = [
        ['value' => 'cash', 'label' => 'Bayar Lunas'],
        ['value' => 'hutang', 'label' => 'Hutang'],
    ];

    public $trx_types = [];
    public function mount(){
        $this->trx_types = TrxType::where('cash_flow', 'out')->orderBy('name', 'ASC')->get();
    }
    protected $listeners = ['datePickerChange'];
    public function datePickerChange($date){
        $this->jatuh_tempo = $date;
    }


    public function finalPrice(){
        if( $this->quantity && $this->price ){
            $this->final_price = $this->quantity * $this->price;
        }
    }

    public function store(){
        if($this->status != 'hutang'){
            $this->jatuh_tempo = null;
            $trx_latest = Transaction::where('status', '!=', 'hutang')->latest()->first();
            // $validated['saldo'] = $trx_latest->saldo - $this->final_price;
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
        // $trx_latest = Transaction::where('status', '!=', 'hutang')->latest()->first();
        // $validated['saldo'] = $this->status == 'hutang' ? $trx_latest->saldo :  ($trx_latest->saldo - $this->final_price);
        if($this->created_at != null){
            $validated['created_at'] =  $this->created_at;
            $validated['updated_at'] =  $this->created_at;
        }
        Transaction::create($validated);
        $this->resetExcept('trx_types');
        
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil menambahkan data Transaksi '.$this->name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
        $this->emit('refresh_trxs_table');
    }
    public function render(){
        return view('livewire.trx.add-transaction');
    }
}
