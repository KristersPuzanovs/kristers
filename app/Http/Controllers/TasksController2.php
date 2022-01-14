<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController2 extends Controller
{
    public function index()
    {
        $tasks = auth()->user()->tasks();
        return view('dashboard2', compact('tasks2'));
    }
    public function add()
    {
    	return view('add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);
    	$task = new Task();
    	$task->description = $request->description;
    	$task->user_id = auth()->user()->id;
    	$task->save();
    	return redirect('/dashboard2'); 
    }

    public function edit(Task $task)
    {

    	if (auth()->user()->id == $task->user_id)
        {            
                return view('edit2', compact('task'));
        }           
        else {
             return redirect('/dashboard2');
         }            	
    }

    public function update(Request $request, Task $task)
    {
    	if(isset($_POST['delete'])) {
    		$task->delete();
    		return redirect('/dashboard2');
    	}
    	else
    	{
            $this->validate($request, [
                'description' => 'required'
            ]);
    		$task->description = $request->description;
	    	$task->save();
	    	return redirect('/dashboard2'); 
    	}    	
    }
}
