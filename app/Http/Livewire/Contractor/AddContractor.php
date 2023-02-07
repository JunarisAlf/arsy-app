<?php

namespace App\Http\Livewire\Contractor;

use App\Models\Contractor;
use App\Models\ContractorDetail;
use App\Models\Layaway;
use App\Models\LayawayDetail;
use DateInterval;
use DateTime;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddContractor extends Component{
    public $contractor_name, $contractor_wa, $keterangan, $interval;

    public function store(){
        $validated = $this->validate([
            'contractor_name' => 'required',
            'contractor_wa' => 'required',
            'keterangan' => 'required',
            'interval' => 'required'
        ]);

        $contractor = new Contractor($validated);
        DB::transaction(function () use($contractor) {
            $contractor->save();
            $jatuh_tempo = new DateTime();
            if($contractor->interval == 'week'){
                $jatuh_tempo->add(new DateInterval('P7D'));
            }else if($contractor->interval == 'month'){
                $jatuh_tempo->add(new DateInterval('P30D'));
            }

            $contractor->details()->save(new ContractorDetail([
                'jatuh_tempo' =>$jatuh_tempo,
                'periode' => 1
            
            ]));
        });
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil menambahkan data '. $this->contractor_name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
        $this->reset();
        $this->emit('refresh_contractors_table');
    }
    public function render(){
        return view('livewire.contractor.add-contractor');
    }
}
