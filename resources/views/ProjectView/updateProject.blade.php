@extends('layouts.app')

@section('content')
    <div align="center">
    <br><br>
    <form method="" action="/afterupdateProject/{{$id}}" class="login-bo" >
        @csrf
        <input name="name" type="text" class="textbox1" placeholder="New Name">
        <input type="submit" class="btn1" value="Update">
    </form>
</div>
    
@endsection

