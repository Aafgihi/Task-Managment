@extends('layouts.app')

@section('content')
    <div align="center">
        <br><br>
    <form method="" action="/afterupdateTask/{{$id}}" class="login-bo" >
    @csrf
        <input name="name" type="text" class="textbox1" placeholder="New Task Name">
          <select name="state">
            <option value="New">New</option>
            <option value="In progress">In progress</option>
            <option value="Done">Done</option>
          </select>
        <br>
        <input type="submit" class="bt2" value="Update">
    </form>

@endsection

