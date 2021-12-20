<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
       if (\Auth::check()) {
        $user = \Auth::user();
        $tasks = $user -> tasks() -> orderBy('created_at', 'desc') -> paginate(10);

        $data = [
                'user' => $user,
                'tasks' => $tasks,
            ];

        return view('tasks.index',$data);
       }
       else{
        return view('tasks.index');
       }
    }

    public function create()
    {
        $task = new Task;
        
        return view('tasks.create',[
            'task' => $task,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'status' => 'required|max:10',            
        ]);
        $task = new Task;
        $user = \Auth::user();
        
        $task -> title = $request -> title;
        $task -> content = $request -> content;
        $task -> status = $request -> status;
        $task -> user_id = $user -> id ;
        
        $task -> save();
        
        return redirect('/');
  
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = \App\Task::findOrFail($id);
        if (\Auth::id() === $task->user_id) {
            return view('tasks.show', ['task' => $task,]);
        }else{
            return view('tasks.error');
             }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $task = \App\Task::findOrFail($id);
        if (\Auth::id() === $task->user_id) {
        return view('tasks.edit', ['task' => $task,]);
        }else{
            return view('tasks.error');
             }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
   {
        $request -> validate([
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'status' => 'required|max:10',
        ]);
        
        $task = Task::findOrFail($id);
        $task -> title = $request->title;
        $task -> content = $request->content;
        $task -> status = $request->status;
        $task -> save();
            
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = \App\Task::findOrFail($id);
          if (\Auth::id() === $task->user_id) {
              $task->delete();
        }else{
            return view('tasks.error');
             }
        return redirect('/');
        }
}
