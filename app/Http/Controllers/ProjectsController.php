<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index() {
      $projects = Project::all();
      return view('projects.index',[
        'projects' => $projects
      ]);
    }
    
    public function show($id) {
      $project = Project::find($id);
      if ($project){
        return view('projects.show', [
          'project' => $project
        ]);
      } else {
        abort(404);
      }
    }
    
    public function create() {
      $project = new Project;
      return view('projects.create',[
        'project' => $project
      ]);
    }
    
    public function edit($id) {
      $project = Project::find($id);
      if ($project) {
        return view('projects.edit',[
          'project' => $project
        ]);
      } else {
        abort(404);
      }
    }
    
    public function update($id) {
      $project = Project::find($id);
      if ($project) {
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect('/projects');
      } else {
        abort(404);
      }
      
    }
    
    public function destroy($id) {
      $project = Project::find($id);
      if ($project) {
        $project->delete();
        return redirect('/projects');
      } else {
        abort(404);
      }
    }
}
