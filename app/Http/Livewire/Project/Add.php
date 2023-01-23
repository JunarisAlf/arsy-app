<?php

namespace App\Http\Livewire\Project;

use App\Http\Controllers\ProjectController;
use App\Models\Project;
// use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\Request;

class Add extends Component {
    public $name, $note;

    public function store(){
        $this->validate([ 'name' => 'required']);
        Project::create([
            'name' => $this->name,
            'note' => $this->note
        ]);
        //show alert
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil menambahkan '.$this->name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
        // empty field
        $this->name = '';
        $this->note = '';
        //refresh table
        $this->emit('refresh_table');
    }
    public function render() {
        return view('livewire.project.add');
    }
}
