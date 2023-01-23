<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class UpdateTrxType extends Component{
    public $show = 'hidden';
    public $cash_flow = [
        ['value' => 'out', 'label' => 'KREDIT'],
        ['value' => 'in', 'label' => 'DEBET']
    ];
    protected $listeners = ['update_trx_type' => 'updateModal'];
    public function updateModal(){
        // $id = $project['id'];
        // 
        $this->show = 'block';
    }

    public function update(){
        // 
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil mengupdate data ',
            'theme' => 'success',
            'title' => 'Info'
        ]);
        $this->emit('refresh_table');
        $this->show = 'hidden';

    }
    public function render(){
        return view('livewire.category.update-trx-type');
    }
}
