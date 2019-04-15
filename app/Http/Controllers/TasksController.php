<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class TasksController extends Controller
{
    public function store(Project $project) {
      request()->validate(Task::$validation);
      $task = $project->addTask(request('title'));
      return redirect('/projects/'.$task->project_id);
    }
    
    public function update(Task $task) {
      $task->update([
        'completed' => request()->has('completed')
      ]);
      return redirect('/projects/'.$task->project_id);
    }
}
