<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // protected $guarded = [];
    protected $fillable = [ 'completed', 'title' ];
    
    public static $validation = [
      'title' => ['required','min:3']
    ];
    
    public function project() {
      return $this->belongsTo(Project::class);
    }
}
