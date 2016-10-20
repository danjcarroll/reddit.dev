@extends ('layouts.master')

@section ('title', 'Posts')

@section('search-bar')
	@include('layouts.partials.search')
@stop

@section ('content')

<div class="page-header">
	<h1>Posts <small> pick your poison...</small></h1>

<div class="row">
	<div class="col-sm-2 col-sm-offset-9">
		<a href="{{ action('PostsController@index') }}?sort=top">Oldest</a>
		<a href="{{ action('PostsController@index') }}?sort=recent" class="pull-right">Recent</a>
	</div>


</div> <!-- row -->
</div class="row">
	<div class="col-sm-3">
	</div> <!-- col-sm-3 -->

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

		{!! $posts->appends(['searchTerm' => $searchTerm])->render() !!}
	</div>
</div> <!-- row -->

@stop