@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of Tasks</div>

                <div class="card-body">

                    <h1>{{$project->name}}</h1>
    <h3>Duration: {{$project->description}}</h3>


<ul style="list-style-type:none">
    @foreach($project->Tasks as $Tasks)

            <li><h1>
        <div>
            <button> {{$Tasks->name}} </button>
            <button class="bt4"> {{$Tasks->state}} </button>
        </div> 
                <a href="/deleteTask/{{$Tasks->id}}"><button class="bt3">Delete</button></a>
                <a href="/updateTask/{{$Tasks->id}}"><button class="bt2">update</button></a></li>
            </h1>
    @endforeach
</ul>


    <div align="center">
        <br><br>
    <form class="form" method="POST" action="/project/{{$project->id}}/task" class="login-box">

    @csrf
        <input style="width:50%;" type="text" name="name" placeholder="Enter new task" class="textbox1"> <br>
        <input type="submit" name="AddTask" value="Add Task"class="bt1" >
    </form>
    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

