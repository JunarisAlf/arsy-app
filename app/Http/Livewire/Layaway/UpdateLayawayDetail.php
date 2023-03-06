<?php

namespace App\Http\Livewire\Layaway;

use App\Models\LayawayDetail;
use DateTime;
use Livewire\Component;

class UpdateLayawayDetail extends Component{
    public $show = 'hidden', $detail_id, $month, $paid, $note, $paid_at;

    protected $listeners = ['pay_layaway' => 'updateModal'];
    public function updateModal($id){
        $this->month = LayawayDetail::find($id)->month;
        $this->detail_id = $id;
        $this->show = 'block';
    }

    public function pay($id){
        $this->validate(['paid' => 'required|numeric|min:0']);
        $layaway = LayawayDetail::find($id);
        $layaway->paid = $this->paid;
        $layaway->note = $this->note;
        $layaway->paid_at = new DateTime($this->paid_at);
        $layaway->save();

        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil melakukan pembayaran',
            'theme' => 'info',
            'title' => 'Info'
        ]);
        $this->emit('refresh_layaway_details_table');
        $this->emit('refresh_layaways_table');
        $this->reset();
        $this->show = 'hidden';

    }
    public function render(){
        return view('livewire.layaway.update-layaway-detail');
    }
}
