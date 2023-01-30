<?php

namespace App\Http\Livewire\Layaway;

use Livewire\Component;

class AddLayaway extends Component{
    public $name;

    public function store(){

    }
    public function render(){
        return view('livewire.layaway.add-layaway');
    }
}
