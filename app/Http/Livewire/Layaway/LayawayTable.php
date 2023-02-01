<?php

namespace App\Http\Livewire\Layaway;

use App\Models\Layaway;
use Livewire\Component;

class LayawayTable extends Component{
    public $layaways = [];
    protected $listeners = ['refresh_layaways_table' => 'refresh'];
    public function refresh(){
        $this->layaways = Layaway::latest()->get();
    }
    public function mount(){
        $this->layaways = Layaway::latest()->get();
    }
    public function delete($id, $name){
        $this->emit('delete_layaway', $id, $name); //TrxTypeConfirmModal
    } 
    public function finish($id,$name){
        $this->emit('make_finish_layaway', $id, $name); //TrxTypeCategory

    }
    public function detail($id, $name){
        $this->emit('detail_layaway', $id, $name); 
    }

    public function render(){
        return view('livewire.layaway.layaway-table');
    }
}
