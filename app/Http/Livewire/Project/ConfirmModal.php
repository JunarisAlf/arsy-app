<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class ConfirmModal extends Component{
    public $msg, $project_id, $name, $show = 'hidden';

    protected $listeners = ['delete' => 'confirm'];

    public function confirm($project){
        $this->show = 'block';
        $this->project_id = $project['id'];
        $this->name = $project['name'];
    }
    public function delete($id){
        Project::destroy($id);
        $this->show = 'hidden';
        $this->emit('refresh_table');
    }
    public function render(){
        return view('livewire.project.confirm-modal');
    }
}
