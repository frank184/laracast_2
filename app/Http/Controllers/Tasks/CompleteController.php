<?php

namespace App\Http\Controllers\Tasks;

use Illuminate\Http\Request;
use App\Project;
use App\Task;

class CompleteController extends Controller
{
    public function store(Task $task) {
      $task->complete();
      return back();
    }
    
    public function destroy(Task $task) {
      $task->incomplete();
      return back();
    }
}
