@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Project</div>

                <div class="card-body">
              <?php  $user = Auth::user()->name ;?>
    <form method="POST" action="/project/{{$user}}" class="login-box">
        @csrf

        <h2 style="color: black">Name Of Project :
            <input type="text" name="name" class="textbox" placeholder="Enter Project Name">
        </h2>

        <h2 style="color: black">Duration :
            <input name="description" class="textbox" placeholder="Enter Project Duration">
        </h2>

        <input type="submit" name="AddPro" value="Add Project" class="bt1">
    </form>

                </div>
                
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

