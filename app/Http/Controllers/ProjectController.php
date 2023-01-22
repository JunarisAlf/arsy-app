<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::orderBy('updated_at', 'DESC')->get();
        return view('pages.project-index', ['projects' => $projects]);
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
