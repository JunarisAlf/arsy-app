<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class Add extends Component {
    public $name, $note;

    public function store(){
        $this->validate([ 'name' => 'required']);
        Project::create([
            'name' => $this->name,
            'note' => $this->note
        ]);
        $this->emit('refresh_alert', ['show' => 1, 'msg' => 'Berhasil menambahkan '.$this->name]);

    }
    public function render() {
        return view('livewire.project.add');
    }
}
