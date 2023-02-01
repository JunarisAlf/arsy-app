<?php

namespace App\Http\Livewire\Layaway;

use App\Models\Layaway;
use Livewire\Component;

class MakeFinishConfirmation extends Component{
    public $show = 'hidden', $layaway_id, $customer_name;

    protected $listeners = ['make_finish_layaway' => 'confirm'];

    public function confirm($id, $name){
        $this->layaway_id = $id;
        $this->customer_name = $name;
        $this->show = 'block';
    }
    public function finish($id){
        $layaway = Layaway::find($id);
        $layaway->is_finish = true;
        $layaway->save();
        
        $this->show = 'hidden';
        $this->emit('refresh_layaways_table');
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil meghapus '. $this->customer_name,
            'theme' => 'info',
            'title' => 'Info'
        ]);
    }

    public function render(){
        return view('livewire.layaway.make-finish-confirmation');
    }
}
