@extends ('layouts.master')

@section ('title', 'Post')

@section ('content')
<div class="page-header">
	<h1>A Post <small> Very specific thing no one cares about...</small></h1>
</div>

</div>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">{{ $post->title }}</h3>
  </div>
  <div class="panel-body">
    {{ $post->content }} <br>
    <p><small>Posted on: {{ $post->created_at->format('j F y') }}</small></p>
  </div>
  <div class="panel-footer"><a href={{ $post->url }}>{{ $post->url }}</a></div>
</div>


		
		

@stop