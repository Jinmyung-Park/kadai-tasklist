@extends('layouts.app')

@section('content')

    <h1>No.{{ $task->id }} Task details</h1>

    <table class="table table-bordered">
        <tr>
            <th class= "col-md-2">No.</th>
            <th class= "col-md-10">{{ $task->id }}</td>
        </tr>
        <tr>
            <th>Task Info.</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    
   
    {!! link_to_route('tasks.edit', 'Edit Task', ['task' => $task->id], ['class' => 'btn btn-light']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('Delect', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
  
@endsection