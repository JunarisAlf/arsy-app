<?php

namespace App\Http\Livewire\Alert;

use Livewire\Component;

class SimpleAlert extends Component{
    public $msg;
    public $show = 0;

    protected $listeners = ['refresh_alert' => 'refresh'];

    public function refresh($params){
        $this->msg = $params['msg'];
        $this->show = $params['show'];
    }
    public function render(){
        return view('livewire.alert.simple-alert');
    }
}
