@extends ('layouts.master')

@section ('title', 'Posts')

@section ('content')
<div class="page-header">
	<h1>All Posts <small> Everything no one cares about...</small></h1>
</div>

	@foreach ($posts as $post)
		<div class="col-sm-6 col-sm-offset-3">
			<a href="{{ action('PostsController@show', $post->id) }}">
				<h2 class="post-title">{{ $post->title }}</h2>	
			</a>
			<p class="post-body">{{ $post->content }}<p>
			<p><small>Posted on: {{ $post->created_at->format('j F y') }}</small></p>
			<a href={{ $post->url }}>{{ $post->url }}</a>
		</div>
	@endforeach

	{!! $posts->render() !!}

@stop