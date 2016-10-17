@extends ('layouts.master')

@section ('title', 'Account')

@section ('content')
<div class="page-header">
	<h1><i class="fa fa-user fa-2x" aria-hidden="true"></i>  {{ $user->name }} <small>lay low bro</small></h1>
</div>
<div class="row">
    <div class="col-sm-3">
        <h3>empty space?</h3>
    </div>
    <div class="col-sm-6">
    @foreach ($user->posts as $post)
            <a href="{{ action('PostsController@show', $post->id) }}">
                <h2 class="post-title">{{ $post->title }}</h2>  
            </a>
            <p class="post-body">{{ $post->content }}<p>
            <p><small>Posted on: {{ $post->created_at->format('j F y') }}</small></p>
            <a href={{ $post->url }}>{{ $post->url }}</a>
    @endforeach
    </div>
</div>
		

@stop