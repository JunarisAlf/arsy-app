<?php

namespace App\Http\Livewire\Category;

use App\Models\ItemCategory;
use Livewire\Component;

class UpdateItemCategory extends Component{
    public $show = 'hidden';
    public $name, $category_id;
    protected $listeners = ['update_item_category' => 'updateModal'];
    public function updateModal($id, $name){
        $this->category_id = $id;
        $this->name = $name;
        $this->show = 'block';
    }

    public function update($id){
        $this->validate(['name' => 'required']);

        $category = ItemCategory::find($id);
        $category->name = $this->name;
        $category->save();

        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil mengupdate kategori '.$this->name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
        $this->emit('refresh_item_categories_table');
        $this->show = 'hidden';

    }
    public function render(){
        return view('livewire.category.update-item-category');
    }
}
