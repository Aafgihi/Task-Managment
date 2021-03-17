<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['name','project_id'] ;

    public function Project()
    {
        return $this->belongsTo(Project::class) ;
    }


}
