@extends('layouts.master')

@section('title','Increment')


@section('content')
	<div class="title">NOTCH IT</div>
	<h1>you typed..</h1>
	<div class="title">{{ $number }}</div>
	<h1>WE NOTCHED IT TO...</h1>
	<div class="title">{{ $incremented }}</div>

@stop

