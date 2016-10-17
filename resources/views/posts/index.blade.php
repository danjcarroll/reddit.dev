@extends ('layouts.master')

@section ('title', 'Posts')

@section ('content')
<div class="page-header">
	<h1>All Posts <small> whoa that's a fatty...</small></h1>
</div>
	<div class="col-sm-3">
		<form class="form" method="GET" action="{{ action('PostsController@index') }}">
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
	@foreach ($posts as $post)
			<a href="{{ action('PostsController@show', $post->id) }}">
				<h2 class="post-title">{{ $post->title }}</h2>	
			</a>
			<p class="post-body">{{ $post->content }}<p>
			<p>Written by
				<a href="{{ action('UsersController@show', $post->user->id) }}">{{ $post->user->name }}</a>
			</p>
			<p><small>Posted on: {{ $post->created_at->format('j F y') }}</small></p>
			<a href={{ $post->url }}>{{ $post->url }}</a>
	@endforeach
		</div>

	{!! $posts->render() !!}

@stop