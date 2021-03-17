@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of project</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif 

                     @foreach($project as $projects)
        
        <h1><a href="/project/{{$projects->id}}"><button class="bt0">{{ $projects->name }}</button></a>
            <a href="/deleteProject/{{$projects->id}}"><button class="bt3">Delete</button></a>
            <a href="/updateProject/{{$projects->id}}"><button class="bt2">update</button></a></li>
        </h1>
            
        
    @endforeach
            <a href="/create"><button class="bt1">Add new project</button></a>
                
                </div>
            </div>
        </div>
    </div>
</div>
    

@endsection