@extends ('layouts.master')

@section ('title', 'Posts')

@section ('content')
<div class="page-header">
	<h1>All Posts <small> Everything no one cares about...</small></h1>
</div>

	@foreach ($posts as $post)
		<h2>{{ $post->title }}</h2>
		<blockquote>
			<p>{{ $post->content }}</p>
		</blockquote>
			<a href={{ $post->url }}>{{ $post->url }}</a>
	@endforeach

@stop