<?php

namespace App\Http\Livewire\Stock;

use Livewire\Component;

class AddStock extends Component{
    public $name;
    public function store(){

    }
    public function render(){
        return view('livewire.stock.add-stock');
    }
}
