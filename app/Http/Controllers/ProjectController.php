<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        return view('pages.project-index');
    }
    public function store(Request $req){
        $req->validate([ 'name' => 'required']);
        Project::create([
            'name' => $req->name,
            'note' => $req->note
        ]);
        return back()->with('success', 'Project berhasil ditambhakan!');
    }
}
