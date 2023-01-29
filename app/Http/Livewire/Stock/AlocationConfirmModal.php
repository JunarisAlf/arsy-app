<?php

namespace App\Http\Livewire\Stock;

use App\Models\StockHistory;
use Livewire\Component;

class AlocationConfirmModal extends Component{
    public $show = 'hidden';
    public $alocation_id;
    protected $listeners = ['delete_alocation' => 'confirm'];

    public function confirm($id){
        $this->alocation_id = $id;
        $this->show = 'block';
    }
    public function delete($id){
        StockHistory::destroy($id);

        $this->show = 'hidden';
        $this->emit('refresh_alocations_table');
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil meghapus data',
            'theme' => 'info',
            'title' => 'Info'
        ]);
    }

    public function render(){
        return view('livewire.stock.alocation-confirm-modal');
    }
}
