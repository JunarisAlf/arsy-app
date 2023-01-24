<?php

namespace App\Http\Livewire\Debt;

use Livewire\Component;

class AddDebt extends Component{
    public $name;
    public function store(){

    }
    public function render(){
        return view('livewire.debt.add-debt');
    }
}
