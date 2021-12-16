@extends('layouts.app')

@section('content')

    <h1 class="text-dark display-4">TaskList</h1>
    <br />
    @if(count($tasks) > 0)
        <table class = "table talbe-striped table-sm col-md-12">
            <thead>
                <tr>
                    <th class= "col-md-2">Task No.</th>
                    <th class= "col-md-4">Task Title</th>
                    <th class= "col-md-3">Task Info</th>
                    <th class= "col-md-1">Task status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td class = "align-middle">{!! link_to_route('tasks.show', $task->id, ['task' => $task->id])!!}</td>
                    <td class = "align-middle">{{ $task->title }}</td>
                    <td class = "align-middle">{{ $task->content }}</td>
                    <td class = "align-middle text-center">{{ $task->status }}</td>
                </tr>
            </tbody>
                @endforeach
        </table>
        
    @elseif(count($tasks) == 0)
            <h1 class="text-dark p-2 h2 border-top ">No Task</h1>
            
    @endif
    <div class = "row  ">
        <div class = "col-md-12">
            <div class= "d-flex justify-content-center">{{ $tasks -> links() }}</div>
            <span class = "d-flex justify-content-end">{!! link_to_route('tasks.create', 'Create a task', [], ['class' => 'btn btn-info']) !!}</span>
        </div>
    </div>
    
@endsection

