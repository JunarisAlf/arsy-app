<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component{
    public   $new_pw, $new_pw_confirmation;

    public function store(){
        $this->validate([
            'new_pw' => 'required|min:6|confirmed'
        ]);
        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($this->new_pw);
        $user->save();
        Auth::logout();
        session()->invalidate();
        return redirect()->route('login_view');

    }
    public function render(){
        return view('livewire.user.change-password');
    }
}
