<?php

namespace App\Http\Livewire\Debt;

use Livewire\Component;

class AddLayaway extends Component{
    public $name;

    public function store(){

    }
    public function render(){
        return view('livewire.debt.add-layaway');
    }
}
