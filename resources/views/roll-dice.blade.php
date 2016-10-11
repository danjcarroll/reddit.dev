@extends('layouts.master')

@section('head')
    <title>Roll Dice</title>
@stop

@section ('content')

    <div class="title">Roll the Bones</div>
    <h1>Fate gave you...</h1>
    <div class="title">{{ $roll }}</div>
    <h1>You guessed...</h1>
    <div class="title">{{ $guess }}</div>
    
    <!-- BEST PRACTICE is to do logic with data in model
    Failing that in a function in the controller -->
    @if ($correct)
    	<h2>You guessed well</h2>
    @else
    	<h2>You guess poorly</h2>
    @endif

@stop