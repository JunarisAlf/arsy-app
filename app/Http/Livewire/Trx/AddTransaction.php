<?php

namespace App\Http\Livewire\Trx;

use Livewire\Component;

class AddTransaction extends Component{
    public $name;
    public function store(){

    }
    public function render(){
        return view('livewire.trx.add-transaction');
    }
}
