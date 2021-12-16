@extends('layouts.app')

@section('content')

    <h1 class="mt-4 pb-3 border-bottom">Create New Task</h1>
    <br />
    
            {!! Form::model($task,['route' => 'tasks.store' ,'class'=>'form-inline row'])!!}

                    <div class="col-md-4  align-self-baseline mt-2 h3">
                    {!! Form::label('content',"Description :")!!}
                    </div>

                    <div class="col-md-8 ">
                        <div class = "row">
                            {!! Form::text('content',null,['class'=>'form-control col-md-8'])!!}
                    {{--    {!! Form::text('content',null,['class'=>'form-control col-md-8','required'])!!} --}}
                             <span class = "col-md-1"></span>
                            {!! Form::submit('Add',['class'=>'btn btn-primary btn float-right col-md-3'])!!}
                            {!! Form::close() !!} 
                            </div>
                        </div>
                    </div>




    <div class="row">
        <span class = "col-md-4"></span>
        <span class = "col-md-3 mt-2 col text-center">{!! link_to_route('tasks.index', 'Cancel', [], ['class' => 'btn btn-secondary col-md-4']) !!}</span> 
    </div>
 
@endsection



            
