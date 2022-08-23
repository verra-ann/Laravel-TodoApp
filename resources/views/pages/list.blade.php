@extends('layouts.app')

@section('head')
    <div class="py-5 text-center">    
        <h3>List of your Task :</h3>
    </div>
@endsection

@section('content')
<!doctype html>
<html lang="en">   
    
    @if(Session::has('success'))
    <div class="alert alert-success">
      {{Session::get('success')}}
    </div>
    @endif
  
    <body>
    <table class="table table-bordered table-striped">
    <tr>
    <td>ID</td>
    <td>TASK</td>
    <td>CREATED AT</td>
    <td>UPDATED AT</td>
    <td>EDIT</td>
    <td>ACTION</td>
    </tr>
 
    @foreach($task as $Tasks)
        <tr>
        <td>{{ $Tasks->id }}</td>
        <td>{{ $Tasks->task }}</td>
        <td>{{ $Tasks->created_at }}</td>
        <td>{{ $Tasks->updated_at }}</td>
        
        <td><a href = 'edit/{{ $Tasks->id }}'>Edit</a></td>

        <td><a href = 'delete/{{ $Tasks->id }}'>Delete</a></td>

        </tr>
    @endforeach
    </table>
    </body>
</html>  
@endsection

@section('footer')
    <div class="py-5 text-center">    
        <a href="/">Create New Task</a>
    </div>
@endsection