<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{
    public function login(Request $req){
        $req->validate([ 'username' => 'required', 'password' => 'required' ]);
        if (Auth::attempt(['username' => $req->username, 'password' => $req->password ])) {
            $req->session()->regenerate();
            return redirect()->route('home')->with('success', 'Berhasil Login!');
        }
        return back()->withErrors([
            'username' => 'Username atau password yang anda masukan salah',
            'password' => 'Username atau password yang anda masukan salah',
        ]);
    }
    public function logout(Request $req){
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('masuk');
    }
    public function password(){
        return view('pages.password');
    }
    
}
