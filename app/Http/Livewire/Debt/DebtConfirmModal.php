<?php

namespace App\Http\Livewire\Debt;

use Livewire\Component;

class DebtConfirmModal extends Component
{
    public $show = 'hidden';

    protected $listeners = ['delete_debt' => 'confirm'];

    public function confirm(){
        $this->show = 'block';
        // $this->project_id = $project['id'];
        // $this->name = $project['name'];
    }
    public function delete(){
        $this->show = 'hidden';
        $this->emit('refresh_table');
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil meghapus ',
            'theme' => 'info',
            'title' => 'Info'
        ]);
    }

    public function render()
    {
        return view('livewire.debt.debt-confirm-modal');
    }
}
