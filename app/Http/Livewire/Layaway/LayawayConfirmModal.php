<?php

namespace App\Http\Livewire\Layaway;

use App\Models\Layaway;
use Livewire\Component;

class LayawayConfirmModal extends Component{
    public $show = 'hidden', $layaway_id, $name;

    protected $listeners = ['delete_layaway' => 'confirm'];

    public function confirm($id, $name){
        $this->layaway_id = $id;
        $this->name = $name;
        $this->show = 'block';
    }
    public function delete($id){
        Layaway::destroy($id);
        $this->show = 'hidden';
        $this->emit('refresh_layaways_table');
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil meghapus '. $this->name,
            'theme' => 'info',
            'title' => 'Info'
        ]);
    }

    public function render(){
        return view('livewire.layaway.layaway-confirm-modal');
    }
}
