@extends('layouts.master')

@section('head')
	<title>UPPERS</title>
@stop

@section('content')
	<div class="title">UPPERCASE ME</div>
	<h1>your word...</h1>
	<div class="title">{{ $word }}</div>
	<h1>CHANGED TO...</h1>
	<div class="title">{{ $upperword }}</div>

@stop

