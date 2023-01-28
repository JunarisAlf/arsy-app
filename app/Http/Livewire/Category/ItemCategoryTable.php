<?php

namespace App\Http\Livewire\Category;

use App\Models\ItemCategory;
use Livewire\Component;

class ItemCategoryTable extends Component{
    public $categories = [];
    public function mount(){
        $this->categories = ItemCategory::orderBy('updated_at', 'DESC')->get();
    }
    protected $listeners = ['refresh_item_categories_table' => 'refresh'];
    public function refresh(){
        $this->categories = ItemCategory::orderBy('updated_at', 'DESC')->get();
    }

    public function delete($id, $name){
        $this->emit('delete_item_category', $id, $name);
    }
    public function update($id, $name){
        $this->emit('update_item_category', $id, $name); //UpdateItemCategory
        
    }
    public function render(){
        return view('livewire.category.item-category-table');
    }
}
