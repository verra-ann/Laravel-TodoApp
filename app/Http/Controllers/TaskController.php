<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use DB;
use App\Http\Requests;
use App\Http\Controllers\TaskController;
//use Illuminate\Support\Facades\Task;
//use Illuminate\Validation\Task;
//use App\Http\Controllers\Task;

class TaskController extends Controller
{
    //----------TO ADD A NEW TASK---------------------------------------
    // public function create(Request $request){
    //     $task=new task;
    //     $task->task=$request->task;
    //     $task->save();
    //     return redirect('/')->with('success', 'Task Added Successfully!');

    //     if (Task::where('task', '=', $request->input('task'))->first()){
    //         //task already exists
    //         return redirect('/')->with('error', 'Task Already Exists.');
    //     }
    //     //return view('pages.home')->with('success', 'Task Added Successfully.');
        
    // }
    public function create(Request $request){
        $task = Task::where('task', '=', $request->input('task'))->first();
        

        if($task === null){ //Task does not exist  
            $task=new task;
            $task->task=$request->task;
            $task->save();                           
            return redirect('/')->with('success', 'Task Added Successfully!');
        }
        else{
            //task exists
            return redirect('/')->with('error', 'Task Already Exists.');
        }
    }
    //-------------TO SHOW LIST OF TASK---------------------------------
    public function list(Request $id){
        $task = task::all();
        return view('pages.list',compact('task'));
    }

    //--------------TO DELETE DATA----------------------------------------
    public function destroy($id){
        $task=task::find($id)->delete();
        //$task->delete();
        return redirect('/list')->with('success', 'Task Deleted Successfully!');
    }

    //-----------------TO UPDATE/EDIT DATA---------------------------------
    // public function index(){ //edit-records
    //     $task = task::find($id);
    //     //$task = DB::select('SELECT * from tasks');
    //     return view('edit_task', ['task'=>$task]); 
    // }

    public function show($id){ //edit/{id}
        $task = task::find($id);
        return view('pages.edit')->with('task', $task);
    }

    public function edit(Request $request){ //edit/{id} //----------UTK UPDATES
        $task=task::find($request->id);
        $task->task=$request->task;
        $task->save();
        return redirect('/list');
    }
}
