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

    public function delete($project_id, $project_name){
        $this->emit('delete', ['id' => $project_id, 'name' => $project_name ]); //confirmModal
    }
    public function update($project_id, $project_name){
        $this->emit('update', ['id' => $project_id, 'name' => $project_name]); //Update
    }
    public function render(){
        return view('livewire.project.table');
    }
}
