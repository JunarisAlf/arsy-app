<?php

namespace App\Http\Livewire\Category;

use App\Models\TrxType;
use Livewire\Component;

class UpdateTrxType extends Component{
    public $show = 'hidden';
    public $cash_flow_value, $type_id, $name;
    public $cash_flow = [
        ['value' => 'out', 'label' => 'KREDIT'],
        ['value' => 'in', 'label' => 'DEBET']
    ];
    protected $listeners = ['update_trx_type' => 'updateModal'];
    public function updateModal($id){
        $trxType = TrxType::find($id);
        $this->type_id = $id;
        $this->name = $trxType->name;
        $this->cash_flow_value = $trxType->cash_flow;
        $this->show = 'block';
    }

    public function update($id){
        $trxType = TrxType::find($id);
        $trxType->name = $this->name;
        $trxType->cash_flow = $this->cash_flow_value;
        $trxType->save();
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil mengupdate data '. $this->name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
        $this->emit('refresh_trx_types_table');
        $this->show = 'hidden';

    }
    public function render(){
        return view('livewire.category.update-trx-type');
    }
}
