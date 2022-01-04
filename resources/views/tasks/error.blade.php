@extends('layouts.app')

@section('content')
  

    <div class="center jumbotron border">
        <div class="text-center">
            <span class="display-4 ">Access Denied<br /></span><br />
               {!! link_to_route('tasks.index', 'Return', [], ['class' => 'btn btn-secondary mt-2 pl-3 pr-3']) !!}
        </div>
    </div>
    
@endsection

