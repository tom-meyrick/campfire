<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project) 
    {
        if(auth()->user()->isNot($project->owner)) {
            abort(403);
        }
        request()->validate(['body' => 'required']);
        $project->addTask(request('body')); 
        return redirect($project->path());
    }
}
