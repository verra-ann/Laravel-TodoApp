@extends('layouts.app')

@section('head')
    <div class="py-5 text-center">    
        <h2>UPDATE TASK</h2>
    </div>
@endsection

@section('content')
<!DOCTYPE html>
<html>
    <body>
        <form action="/edit/<?php echo $task->id; ?>" method="POST">
        {{-- <form action="/edit/<?php echo $task[0]->id; ?>" method="post"> --}}
        <input type = "hidden" name= "_token" value= "<?php echo csrf_token(); ?>">
        
        <table>
            <tr>
                <label for="taskname" class="form-label">Task</label><br>                             
                {{-- <input type ='text' name= 'task' value= '<?php echo $task[0]->task; ?>'/> --}}
                <input type ='text' name= 'task' value= "{{$task['task']}}"/>
            </tr>      
            <tr>
                <td colspan = '3'>
                <button class="w-100 btn btn-primary btn-lg" type="submit">Update Task</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
@endsection

@section('footer')

    <div class="py-5 text-center">     
        <a href="/list">CANCEL</a>
    </div>
    
@endsection