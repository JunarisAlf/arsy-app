<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class AddTrxType extends Component{
    public $name;
    public $cash_flow = [
        ['value' => 'out', 'label' => 'KREDIT'],
        ['value' => 'in', 'label' => 'DEBET']
    ];
    public function store(){

    }
    public function render(){
        return view('livewire.category.add-trx-type');
    }
}
