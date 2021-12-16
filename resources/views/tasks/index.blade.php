@extends('layouts.app')

@section('content')

    <h1 class="text-dark display-4">TaskList</h1>
    <br />
    @if(count($tasks) > 0)
        <table class = "table talbe-striped table-sm">
            <thead>
                <tr>
                    <th class= "col-md-2">Task No.</th>
                    <th class= "col-md-4">Task Title</th>
                    <th class= "col-md-6">Task Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
            </tbody>
                @endforeach
        </table>
        
    @elseif(count($tasks) == 0)
            <h1 class="text-dark p-2 h2 border-top ">No Task</h1>
            
    @endif

    <span class = m-2>{!! link_to_route('tasks.create', 'Create a task', [], ['class' => 'btn btn-info mt-2']) !!}</span>

@endsection

