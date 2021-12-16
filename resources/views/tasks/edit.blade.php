@extends('layouts.app')

@section('content')

    <h1 class="mt-4 pb-3 border-bottom">Edit Task No.{{ $task->id }}</h1>
    <br />

            {!! Form::model($task,['route' => ['tasks.update', $task->id] ,'method' => 'put','class'=>'form-inline row col-md-12 m-1 '])!!}

            {!! Form::label('title',"Task title",['class'=>'col-md-2 h4  justify-content-end ml-2'])!!}
            {!! Form::text('title',null,['class'=>'form-control col-md-8 ml-2'])!!}
            
            {!! Form::label('content',"Description",['class'=>'col-md-2 h4  justify-content-end ml-2'])!!}
            {!! Form::text('content',null,['class'=>'form-control col-md-8 ml-2'])!!}
            {{--    {!! Form::text('content',null,['class'=>'form-control col-md-8','required'])!!} --}}
            <br />
            <div class="col-md-6 "></div>        
            {!! Form::submit('Edit',['class'=>'btn btn-primary col-md-2  ml-2 mt-2'])!!}
            {!! link_to_route('tasks.show', 'Cancel', ['task' => $task->id], ['class' => 'btn btn-secondary col-md-2 ml-2 mt-2']) !!}
            {!! Form::close() !!} 



    
@endsection




