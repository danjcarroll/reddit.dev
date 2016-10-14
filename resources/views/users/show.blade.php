@extends ('layouts.master')

@section ('title', 'Account')

@section ('content')
<div class="page-header">
	<h1><i class="fa fa-user fa-2x" aria-hidden="true"></i>  {{ $user->name }} <small>lay low bro</small></h1>
</div>
<div class="row">
    <div class="col-sm-3">
        <h3>author name here</h3>
        <p>Posted<p>
    </div>
    <div class="col-sm-6">
      <p class="post-body"><p>
        <br>

    </div>	
</div>
		

@stop