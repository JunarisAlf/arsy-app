<?php

namespace App\Http\Livewire\Layaway;

use App\Models\Layaway;
use App\Models\LayawayDetail;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddLayaway extends Component{
    public $customer_name, $customer_wa, $tenor, $project, $block, $price, $note;

    public function store(){
        $validated = $this->validate([
            'customer_name' => 'required',
            'customer_wa' => 'required',
            'tenor' => 'required|numeric|min:0',
            'project' => 'required',
            'block' => 'required',
            'price' => 'required|numeric|min:0',
            'note' => 'nullable',
        ]);
        $layaway = new Layaway($validated);
        DB::transaction(function () use($layaway) {
            $layaway->save();
            $jatuh_tempo = new DateTime();
            for ($i=1; $i <= 12 ; $i++) { 
                $detail = new LayawayDetail([
                    'month' => $i,
                    'jatuh_tempo' => $jatuh_tempo ,
                ]);
                $layaway->details()->save($detail);
                $jatuh_tempo->add(new DateInterval('P30D'));
            }
        });
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil menambahkan data '. $this->customer_name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
        $this->reset();
        $this->emit('refresh_layaways_table');
    }
    public function render(){
        return view('livewire.layaway.add-layaway');
    }
}
