<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;

class UpdateItemCategory extends Component{
    public $show = 'hidden';
    protected $listeners = ['update_item_category' => 'updateModal'];
    public function updateModal(){
        // $id = $project['id'];
        // 
        $this->show = 'block';
    }

    public function update(){
        // 
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil mengupdate data ',
            'theme' => 'success',
            'title' => 'Info'
        ]);
        $this->emit('refresh_table');
        $this->show = 'hidden';

    }
    public function render(){
        return view('livewire.category.update-item-category');
    }
}
