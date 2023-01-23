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
}
