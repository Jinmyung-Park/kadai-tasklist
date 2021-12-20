@extends('layouts.app')

@section('content')

    @if (Auth::check())
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
            <br /><br />
            
        @elseif(count($tasks) == 0)
                <h1 class="text-dark p-2 h2 border-top ">No Task</h1>
                
        @endif
        <div class = "row  ">
            <div class = "col-md-12">
                <div class= "d-flex justify-content-center">{{ $tasks -> links() }}</div>
                <span class = "d-flex justify-content-end">{!! link_to_route('tasks.create', 'Create a task', [], ['class' => 'btn btn-info']) !!}</span>
            </div>
        </div>
    @else
            <div class="center jumbotron border">
            <div class="text-center">
                <span class="display-3 border-bottom border-dark ">Task List Tool<br /></span>
                <br /><br />
            </div>
        
        
           <div class="row">
               <div class="col-sm-6 offset-sm-3 p-3">
    
                {!! Form::open(['route' => 'login.post']) !!}
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div><br />
    
                    {!! Form::submit('Log in', ['class' => 'btn btn-info btn-block']) !!}
                    {!! Form::close() !!}
    
                {{-- ユーザ登録ページへのリンク --}}

                {!! link_to_route('signup.get', 'Sign Up', [], ['class' => 'btn btn-block btn-secondary mt-2']) !!}
                </div>
        </div>
    </div>
    @endif
    
@endsection
