<?php

namespace App\Http\Livewire\Category;

use App\Models\TrxType;
use Livewire\Component;

class TrxTypeConfirmModal extends Component{
    public $show = 'hidden';
    public $type_id, $name;
    protected $listeners = ['delete_trx_type' => 'confirm'];

    public function confirm($id, $name){
        $this->type_id = $id;
        $this->name = $name;
        $this->show = 'block';
    }
    public function delete($id){
        TrxType::destroy($id);

        $this->show = 'hidden';
        $this->emit('refresh_trx_types_table');
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil meghapus '. $this->name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
    }

    public function render(){
        return view('livewire.category.trx-type-confirm-modal');
    }
}
