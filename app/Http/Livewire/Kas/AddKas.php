<?php

namespace App\Http\Livewire\Kas;

use App\Models\Kas;
use Livewire\Component;

class AddKas extends Component
{
    public $jumlah, $note;
    public function store(){
        $this->validate([ 'jumlah' => 'required' ]);
        Kas::create([
            'jumlah' => $this->jumlah,
            'note' => $this->note
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
