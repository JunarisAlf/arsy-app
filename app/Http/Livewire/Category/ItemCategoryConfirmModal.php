<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class ItemCategoryConfirmModal extends Component
{
    public $show = 'hidden';

    protected $listeners = ['delete_item_category' => 'confirm'];

    public function confirm(){
        $this->show = 'block';
        // $this->project_id = $project['id'];
        // $this->name = $project['name'];
    }
    public function delete(){
        $this->show = 'hidden';
        $this->emit('refresh_table');
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil meghapus ',
            'theme' => 'success',
            'title' => 'Info'
        ]);
    }

    public function render()
    {
        return view('livewire.category.item-category-confirm-modal');
    }
}
