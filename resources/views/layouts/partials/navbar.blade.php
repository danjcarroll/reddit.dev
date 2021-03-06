<nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ action('PostsController@index') }}">TOKE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ action('PostsController@index') }}">Posts</a></li>
                <li><a href="{{ action('UsersController@index') }}">Users</a></li>
            @if(Auth::check())
                <li><a href="{{ action('UsersController@show' , Auth::id()) }}">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ action('PostsController@create') }}">Create Post</a></li>
            @else
                <li><a href="{{ action('Auth\AuthController@getLogin') }}">Login</a></li>
                <li><a href="{{ action('Auth\AuthController@getRegister') }}">Signup</a></li>
            @endif
            </ul>
            
            <div class="navbar-form navbar-right">
                @yield('search-bar')
            </div><!-- search bar -->


            @if(Auth::check())
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="{{ (action('Auth\AuthController@getLogout')) }}">Logout</a></li>
                </ul>
            @endif
        </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>