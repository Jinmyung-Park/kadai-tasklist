<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">TaskList</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                
            @if (Auth::check())
    
                <li class="nav-item">{!! link_to_route('tasks.create', 'Create a Task', [], ['class' => 'nav-link  font-italic']) !!}</li>
                <li class="nav-item">{!! link_to_route('logout.get', 'Logout', [], ['class' => 'nav-link font-weight-bold']) !!}</li> 
            
            @else
    
                <li class="nav-item">{!! link_to_route('signup.get', 'Sign Up', [], ['class' => 'nav-link']) !!}</li>
   
            @endif

            </ul>
        </div>
    </nav>
</header>