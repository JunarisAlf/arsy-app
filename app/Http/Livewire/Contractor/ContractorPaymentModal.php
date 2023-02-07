<?php

namespace App\Http\Livewire\Contractor;

use App\Models\ContractorDetail;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ContractorPaymentModal extends Component{
    public $show = 'hidden', $detail_id,  $paid, $note;

    protected $listeners = ['pay_contractor' => 'updateModal'];
    public function updateModal($id){
        $this->detail_id = $id;
        $this->show = 'block';
    }

    public function pay($id){
        $this->validate(['paid' => 'required|numeric|min:0']);
        DB::transaction(function() use($id){
            $contractor_detail = ContractorDetail::find($id);
            $contractor_detail->pay = $this->paid;
            $contractor_detail->note = $this->note;
            $contractor_detail->payment_date = new DateTime();
            $contractor_detail->save();
            
            $jatuh_tempo = new DateTime();
            if($contractor_detail->interval == 'week'){
                $jatuh_tempo->add(new DateInterval('P7D'));
            }else if($contractor_detail->interval == 'month'){
                $jatuh_tempo->add(new DateInterval('P30D'));
            }
            ContractorDetail::create([
                'contractor_id' => $contractor_detail->contractor_id,
                'jatuh_tempo' =>$jatuh_tempo,
                'periode' => ContractorDetail::latest()->first()->periode + 1
            ]);
        });
       

        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil melakukan pembayaran',
            'theme' => 'info',
            'title' => 'Info'
        ]);
        $this->emit('refresh_contractor_details_table');
        $this->emit('refresh_contractors_table');
        $this->reset();
        $this->show = 'hidden';

    }
    public function render(){
        return view('livewire.contractor.contractor-payment-modal');
    }
}
