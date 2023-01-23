<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class AddItemCategory extends Component{
    public $name;
    public $parent;
    public function store(){

    }
    public function render(){
        return view('livewire.category.add-item-category');
    }
}
