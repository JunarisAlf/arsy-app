<?php

namespace App\Http\Livewire\Debt;

use Livewire\Component;

class DebtTable extends Component{
    public function delete(){
        $this->emit('delete_debt');
    }
    public function update(){
        $this->emit('update_debt'); //UpdateItemCategory
        
    }
    public function render(){
        return view('livewire.debt.debt-table');
    }
}
