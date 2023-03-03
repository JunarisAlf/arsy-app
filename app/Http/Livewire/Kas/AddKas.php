<?php

namespace App\Http\Livewire\Kas;

use App\Models\Kas;
use Livewire\Component;

class AddKas extends Component
{
    public $created_at;
    public $jumlah, $note;
    protected $listeners = ['created_at_change'];
    
    public function created_at_change($date){
        $this->created_at = $date;
    }
    public function store(){
        $this->validate([ 'jumlah' => 'required' ]);
        $validated['created_at'] =  $this->created_at;
        $validated['updated_at'] =  $this->created_at;

        Kas::create([
            'jumlah' => $this->jumlah,
            'note' => $this->note,
            'created_at' => $this->created_at,
            'updated_at' => $this->created_at
        ]);
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil menambahkan kas!',
            'theme' => 'success',
            'title' => 'Info'
        ]);
        $this->reset();
        $this->emit('refresh_kas_table');
    }
    public function render()
    {
        return view('livewire.kas.add-kas');
    }
}
