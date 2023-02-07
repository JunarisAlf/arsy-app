<?php

namespace App\Http\Livewire\Contractor;

use App\Models\Contractor;
use Livewire\Component;

class ContractorDetailTable extends Component{
    public $details = [], $contractor_name = '', $show = false, $contractor_id;
    protected $listeners = ['detail_contractor' => 'detail', 'refresh_contractor_details_table' => 'refresh'];
    public function detail($id, $name){
        $this->contractor_id = $id;
        $this->details = Contractor::find($id)->details;
        $this->show = true;
        $this->contractor_name = $name;
    }
    public function refresh(){
        $this->details = Contractor::find($this->contractor_id)->details;
    }

    public function delete(){
        $this->emit('delete_contractor_detail'); //TrxTypeConfirmModal
    } 
    public function pay($id){
        $this->emit('pay_contractor', $id); 
    }
    public function render(){
        return view('livewire.contractor.contractor-detail-table');
    }
}
