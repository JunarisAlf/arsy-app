<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class DebtList extends Component{
    public $hutang;
    public function render()
    {
        return view('livewire.home.debt-list');
    }
}
