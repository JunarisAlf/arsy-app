<?php

namespace App\Http\Livewire\Category;

use App\Models\TrxType;
use Livewire\Component;

class AddTrxType extends Component{
    public $name;
    public $cash_flow = [
        ['value' => 'out', 'label' => 'KREDIT'],
        ['value' => 'in', 'label' => 'DEBET']
    ];
    public $cash_flow_value;
    public function store(){
        $this->validate(['name' => 'required', 'cash_flow_value' => 'required']);
        TrxType::create([
            'name' => $this->name,
            'cash_flow' => $this->cash_flow_value
        ]);
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil menambahkan Kategori Transaksi: '. $this->name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
        // empty field
        $this->name = '';
        $this->cash_flow_value = '';
        //refresh table
        $this->emit('refresh_trx_types_table');
    }

    public function render(){
        return view('livewire.category.add-trx-type');
    }
}
