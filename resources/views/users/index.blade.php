@extends ('layouts.master')

@section ('title', 'Users')

@section ('content')
<div class="page-header">
	<h1>All Users <small> DEA's most wanted...</small></h1>
</div>
	<div class="col-sm-3">
		<form class="form" method="GET" action="{{ action('UsersController@index') }}">
			<div class="input-group">
	    		<input type="text" class="form-control" id='searchTerm' name='searchTerm' placeholder="Search for...">
	    		<span class="input-group-btn">
	    			<button class="btn btn-default" type="submit">
	    				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	    			</button>
	    		</span>
	    	</div><!-- /input-group -->	
    	</form><!-- /form  -->
	</div>

		<div class="col-sm-6">
	@foreach ($users as $user)
			<a href="{{ action('UsersController@show', $user->id) }}">
				<h2 class="user-name">{{ $user->name }}</h2>	
			</a>
			<br>
			
	@endforeach
		</div>

	{{-- {!! $users->render() !!} --}}

@stop