<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class ItemCategoryTable extends Component{
    public function delete(){
        $this->emit('delete_item_category');
    }
    public function update(){
        
    }
    public function render(){
        return view('livewire.category.item-category-table');
    }
}
