<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class TasksController extends AuthedController
{
    public function store(Project $project) {
      request()->validate(Task::$validation);
      $task = $project->addTask(request('title'));
      return back();
    }
    
    public function update(Task $task) {
      $task->complete(request()->has('completed'));
      return back();
    }
}
