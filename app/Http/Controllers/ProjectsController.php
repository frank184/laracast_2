<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends AuthedController
{    
    public function index() {
      $user = auth()->user();
      $projects = $user->projects;
      return view('projects.index', compact('projects'));
    }
    
    public function show(Project $project) {
      // abort_if()
      // abort_unless()
      // $this->authorize('update', $project);
      abort_unless(\Gate::allows('update', $project), 403);
      return view('projects.show', compact('project'));
    }
    
    public function create() {
      $project = new Project;
      return view('projects.create', compact('$project'));
    }
    
    public function store() {
      $user = auth()->user();
      request()->validate(Project::$validation);
      $project = $user->projects->create(request(['title', 'description']));
      return redirect('/projects');
    }
    
    public function edit(Project $project) {
      return view('projects.edit', compact('project'));
    }
    
    public function update(Project $project) {
      request()->validate(Project::$validation);
      $project->update(request(['title', 'description']));
      return redirect('/projects');
    }
    
    public function destroy(Project $project) {
      $project->delete();
      return redirect('/projects');
    }
}
