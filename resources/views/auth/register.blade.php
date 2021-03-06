@extends('layouts.app')

@section('content')
    <div class="center jumbotron border">
        <div class="text-center">
            <h1>Sign up</h1>
        </div>
    
        <div class="row ">
            <div class="col-sm-6 offset-sm-3 ">
    
                {!! Form::open(['route' => 'signup.post']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
    
                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'Confirmation') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div><br />
    
                    {!! Form::submit('Sign up', ['class' => 'btn btn-info btn-block']) !!}
                    {!! Form::close() !!}
                    {!! link_to_route('tasks.index', 'Cancel', [], ['class' => 'btn btn-block btn-secondary mt-2']) !!}
            </div>
        </div>
    </div>
@endsection