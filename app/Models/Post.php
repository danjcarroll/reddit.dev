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

    public function votes()
    {
        return $this->hasMany('App\Models\Vote', 'post_id');
    }

    public function getScore()  
    {
        return Vote::where('post_id', $this->id)->sum('vote');  
    }

    public function getUpVotes()
    {
        return Vote::where('post_id', $this->id)->where('vote',1)->count();  
    }

    public function getDownVotes()
    {
        return Vote::where('post_id', $this->id)->where('vote',0)->count();  
    }

    public static function search($searchTerm)
    {
        return self::where('title','LIKE','%' . $searchTerm .'%');
    }



}
