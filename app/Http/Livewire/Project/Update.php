<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class Update extends Component{
    public $project_id, $name, $note, $show = 'hidden';
    protected $listeners = ['update' => 'updateModal'];
    public function updateModal($project){
        $id = $project['id'];
        $project = Project::find($id);
        $this->project_id = $project->id;
        $this->name = $project->name;
        $this->note = $project->note;
        $this->show = 'block';
    }

    public function update(Project $project){
        $this->validate([ 'name' => 'required']);
        $project->name = $this->name;
        $project->note = $this->note;
        $project->save();
        $this->emit('refresh_alert', [
            'show' => 1, 
            'msg' => 'Berhasil mengupdate data '.$this->name,
            'theme' => 'success',
            'title' => 'Info'
        ]);
        $this->emit('refresh_table');
        $this->show = 'hidden';

    }
    public function render(){
        return view('livewire.project.update');
    }
}
