<?php

namespace App\Http\Livewire\Trx;

use Livewire\Component;

class UpdateTransaction extends Component{
    public $show = 'hidden';
    protected $listeners = ['update_trx' => 'updateModal'];
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
        return view('livewire.trx.update-transaction');
    }
}
