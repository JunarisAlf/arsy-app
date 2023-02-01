<?php

namespace App\Http\Livewire\Layaway;

use App\Models\Layaway;
use Livewire\Component;

class LayawayDetailTable extends Component{
    public $details = [], $customer_name = '', $show = false, $layaway_id;
    protected $listeners = ['detail_layaway' => 'detail', 'refresh_layaway_details_table' => 'refresh'];
    public function detail($id, $name){
        $this->layaway_id = $id;
        $this->details = Layaway::find($id)->details;
        $this->show = true;
        $this->customer_name = $name;
    }
    public function refresh(){
        $this->details = Layaway::find($this->layaway_id)->details;
    }

    public function delete(){
        $this->emit('delete_layaway_detail'); //TrxTypeConfirmModal
    } 
    // public function update($id){
    //     $this->emit('update_layaway_detail', $id); //TrxTypeCategory
    // }
    public function pay($id){
        $this->emit('pay_layaway', $id); 

    }
    public function render(){
        return view('livewire.layaway.layaway-detail-table');
    }
}
