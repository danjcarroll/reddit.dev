@extends ('layouts.master')


@section('title','Create Post')

@section('content')

<div class="page-header">
  <h1>Create Post <small> Say something no one cares about</small></h1>
</div>

<form class="form" method="POST" action="{{ action('PostsController@store') }}">
	{!! csrf_field() !!}
  	<div class="form-group">
	    <label for="title">Post Title</label>
	    <input type="text" class="form-control" id="title" name="title" value ="{{ old('title') }}" placeholder="Title">
 	</div>
	<div class="form-group">
		<label for="postContent">Comment</label>
		<textarea class="form-control" id="content" name="content" rows="3">{{ old('content') }}</textarea>
	</div>
	<div class="form-group">
		<label for="url">External Link</label>
		<input type="url" class="form-control" id="url" name="url" value="{{ old('url') }}" placeholder="example.com">
	</div>
	<button type="submit" class="btn btn-success btn-default">Submit</button>
</form>

@stop