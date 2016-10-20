@extends ('layouts.master')

@section ('title', 'Register')

@section ('content')
	<div class="page-header">
		<h1>Login<small>  experience it as only a user can</small></h1>
	</div>

	<div class="col-sm-6 col-sm-offset-3">
	<form class="form" method="POST" action="{{ action('Auth\AuthController@postLogin') }}">
		{{ csrf_field() }}
		<div class="input-group margin-bottom-sm">
			<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
			<input class="form-control" type="text" name="email" placeholder="Email address" value="{{ old('email') }}">
		</div><br>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
			<input class="form-control" type="password" name="password" placeholder="Password">
		</div><br>
		
		<button type="submit" class="btn btn-primary">Login <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
	</form>
</div>

@stop