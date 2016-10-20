@extends ('layouts.master')

@section ('title', 'Users')

@section('search-bar')
	@include('layouts.partials.search')
@stop


@section ('content')
<div class="page-header">
	<h1>Users <small> DEA's most wanted...</small></h1>
</div>
	<div class="col-sm-3">
		
	</div>

	<div class="col-sm-6">
		@foreach ($users as $user)
			<a href="{{ action('UsersController@show', $user->id) }}">
				<h2 class="user-name">{{ $user->name }}</h2>	
			</a>
			<br>
		@endforeach
	</div>

	{!! $users->appends(['searchTerm' => $searchTerm])->render() !!}

@stop