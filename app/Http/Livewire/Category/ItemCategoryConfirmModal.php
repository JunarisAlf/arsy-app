<?php

namespace App\Http\Livewire\Category;

use App\Models\ItemCategory;
use Livewire\Component;

class ItemCategoryConfirmModal extends Component
{
    public $show = 'hidden';
    public $category_id, $name;

    protected $listeners = ['delete_item_category' => 'confirm'];

    public function confirm($id, $name){
        $this->show = 'block';
        $this->category_id = $id;
        $this->name = $name;
    }
    public function delete($id){
        ItemCategory::destroy($id);
        $this->show = 'hidden';
        $this->emit('refresh_item_categories_table');
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil meghapus kategori: '.$this->name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
    }

    public function render()
    {
        return view('livewire.category.item-category-confirm-modal');
    }
}
