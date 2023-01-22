<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class Table extends Component{
    public $projects;
    protected $listeners = ['refresh_table' => 'refresh'];

    public function refresh(){
        $this->projects = Project::orderBy('updated_at', 'DESC')->get();
    }
    public function render(){
        return view('livewire.project.table');
    }
}
