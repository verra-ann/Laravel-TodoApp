@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

  <body class="bg-light">   
    <div class="container">
    <main>
        
    <div class="row g-5">
      <div class="col-md-7 col-lg-8"><br>
        <h4 class="mb-3">Add Task Form</h4>
        <hr class="my-4">

        @if(Session::has('success'))
          <div class="alert alert-success">
            {{ Session::get('success') }}
          </div>
        @endif

        {{-- @if ($errors->any())  --}}
        @if(Session::has('error'))
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach 
                {{Session::get('error')}}
            </ul>
          </div>
        @endif

        <form action="/create" method="POST">
      
         @csrf

          <div class="row g-3">
            <div class="col-sm-12">
              <label for="taskname" class="form-label">NEW TASK</label><br>
              <div class="col-sm-12">
              <input type="text" name="task" class="form-control" required>            
              <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">CREATE</button>
          </div>
          
        </form>
        
  </body>

  <div class="py-5 text-center"> 
    <a href="/list">VIEW LIST</a>
  </div>
  
</html>
@endsection
