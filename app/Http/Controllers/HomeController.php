<?php


namespace App\Http\Controllers;

class HomeController extends Controller
{
	public function increment($number)
	{
		$data['number'] = $number;
		$data['incremented'] = $number + 1;
		return view('increment')->with($data);
	}


	public function uppercase($word)
	{
		$data['word'] = $word;
		$data['upperword'] = strtoupper($word);
	 	return view('uppercase')->with($data);
	}

	public function rolldice($guess)
	{
		$roll = mt_rand(1,6);
		$data['roll'] = $roll;
		$data['guess'] = $guess;
		$data['correct'] = ($roll == $guess);
		
		return view('roll-dice')->with($data);
	}



}