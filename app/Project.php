<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  // protected $guarded = [];
  protected $fillable = [ 'title', 'description' ];
  
  public static $validation = [
    'title' => ['required','min:3'],
    'description' => ['required','min:3']
  ];
  
  public function tasks() {
    return $this->hasMany(Task::class);
  }
  
  public function addTask($title) {
    return $this->tasks()->create(compact('title'));
  }
  
  public function user() {
    return $this->belongsTo(User::class);
  }
}
