<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class IncomingLayaway extends Component{
    public $angsuran;
    public function render(){
        return view('livewire.home.incoming-layaway');
    }
}
