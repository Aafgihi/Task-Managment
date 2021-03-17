<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Project $project)
    {
        $this->validate(request(),[

            'name' => 'required' ,

        ]);
        Task::create([
            'name'=>request('name'),
            'project_id'=> $project->id ,
        ]) ;
        return back() ;
    }


    public function delete($id)
    {

        $item = Task::find($id) ;
        $item->delete();

        return back() ;
    }


 public function update($id)
    {
        $task = \App\Task::find($id) ;
        $task->name = \request('name') ;
        $task->state = \request('state') ;
        $task->save();
       return redirect('/project/'.$task->project_id) ;
    }

public function updateTask($id)
    {

        return view('ProjectView.updateTask',compact('id')) ;
    }




}
