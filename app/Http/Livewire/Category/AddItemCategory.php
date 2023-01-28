<?php

namespace App\Http\Livewire\Category;

use App\Models\ItemCategory;
use Livewire\Component;

class AddItemCategory extends Component{
    public $name;
    public function store(){
        $this->validate(['name' => 'required']);
        ItemCategory::create(['name' => $this->name]);
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil menambahkan Kategori barang: '. $this->name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
        // empty field
        $this->name = '';
        //refresh table
        $this->emit('refresh_item_categories_table');
    }
    public function render(){
        return view('livewire.category.add-item-category');
    }
}
