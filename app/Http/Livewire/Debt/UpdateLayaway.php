<?php

namespace App\Http\Livewire\Debt;

use Livewire\Component;

class UpdateLayaway extends Component{
    public $show = 'hidden';
    public $cash_flow = [
        ['value' => 'out', 'label' => 'KREDIT'],
        ['value' => 'in', 'label' => 'DEBET']
    ];
    protected $listeners = ['update_layaway' => 'updateModal'];
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
            'theme' => 'info',
            'title' => 'Info'
        ]);
        $this->emit('refresh_table');
        $this->show = 'hidden';

    }
    public function render(){
        return view('livewire.debt.update-layaway');
    }
}
