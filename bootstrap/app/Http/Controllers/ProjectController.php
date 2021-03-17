<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

        $project = Project::all() ;
        return view('ProjectView.index' , compact('project')) ;
     }

    public function show(Project $project)
     {

         return view('ProjectView.show' , compact('project')) ;
        
     }

    public function create()
     {

         return view('ProjectView.create' ) ;

     }


     public function store()
     {
         $this->validate(request(),[
             'name' => 'required' ,
             'description' => 'required' ,

         ]);

         Project::create(\request(['description','name']));
         return redirect('/index') ;
     }

    public function delete($id)
    {
        $item = Project::find($id) ;
        $item->delete();

        return back() ;
    }

    public function update($id)
    {
        $project = \App\Project::find($id) ;
        $project->name = \request('name') ;
        $project->save();

        return redirect('/project/'.$project->id) ;
    }

    public function updatePage($id)
    {

        return view('ProjectView.updateProject',compact('id')) ;
    }

}
