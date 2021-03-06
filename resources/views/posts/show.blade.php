@extends ('layouts.master')

@section ('title', 'Post')

@section ('content')
<div class="page-header">
	<h1>{{ $post->title }}    <small>take a hit</small></h1>
</div>
<div class="row">
    <div class="col-sm-3">
        <a href="{{ action('UsersController@show' , $post->user->id) }}">
        <h3>{{ $post->user->name }}</h3></a>
        <p>Posted {{ $post->created_at->format('M j Y') }}<p>
    </div>
    <div class="col-sm-6">
        <p class="post-body">{{ $post->content }}<p>
        <br>
        <a href={{ $post->url }}>{{ $post->url }}</a>
        <div class="votes">
           <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{ $upVotes }}
           <i class="fa fa-thumbs-o-down vote-btn" aria-hidden="true"></i> {{ $downVotes }}
        </div> <!-- vote -->
    </div>
</div>
<div class="row">
    <div class="col-sm-3">
</div>

</div> <!-- row -->
		

@stop