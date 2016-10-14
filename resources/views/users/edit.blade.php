@extends ('layouts.master')

@section ('title', 'Register')

@section ('content')
	<div class="page-header">
		<h1>Create User <small>Start your new addiction</small></h1>
	</div>
	<div class="col-sm-6 col-sm-offset-3"
	<form class="form" method="POST" action="{{ action('AuthController@create') }}">
		<div class="input-group margin-bottom-sm">
			<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
			<input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Full Name">
		</div><br>
		<div class="input-group margin-bottom-sm">
		  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
		  <input class="form-control" type="text" placeholder="Email address">
		</div><br>
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
		  <input class="form-control" type="password" placeholder="Password">
		</div><br>
		<button type="submit" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i> Signup</button>
	</form>
</div>

@stop