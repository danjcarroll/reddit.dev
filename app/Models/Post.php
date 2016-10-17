<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public static $rules = [
            'title' => 'required|min:5',
            'url' => 'required|url',
            'content' => 'required',
        ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public static function search($searchTerm)
    {
        return self::where('title','LIKE','%' . $searchTerm .'%');
    }



}
