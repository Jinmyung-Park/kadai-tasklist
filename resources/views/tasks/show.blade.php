@extends('layouts.app')

@section('content')
  
   <div class="row">
  
        <h1>No.{{ $task->id }} Task details</h1>

        <table class="table table-bordered">
            <tr>
                <th class= "col-md-2">No.</th>
                <td class= "col-md-10">{{ $task->id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ $task->title }}</td>
            </tr>
            <tr>
                <th>Details</th>
                <td>{{ $task->content }}</td>
            </tr>
        </table>
    </div>
    
   <div class="row">
    {!! link_to_route('tasks.edit', 'Edit Task', ['task' => $task->id], ['class' => 'btn btn-primary m-1 border']) !!}

    @if (Auth::id() == $task -> user_id)
        {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delect', ['class' => 'btn btn-danger  m-1 pl-3 pr-3 border']) !!}
        {!! Form::close() !!}
    @endif
    {!! link_to_route('tasks.index', 'Cancel', [], ['class' => 'btn btn-secondary m-1 pl-3 pr-3 border']) !!} 
    
    

  </div>
@endsection