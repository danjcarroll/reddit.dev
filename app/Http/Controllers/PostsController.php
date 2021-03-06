<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\Vote;


class PostsController extends Controller
{

    /**
    * protects routes from non-logged in users
    * excludes index and show
    */

    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $postsPerPage = 10;

        if (isset($request->searchTerm))
            {
                $posts = Post::search($request->searchTerm)->paginate($postsPerPage);

        } elseif ($request->sort == 'top') 
        {
            $posts = Post::with('user')->orderBy('created_at', 'Asc')->paginate($postsPerPage);

        } else
            {
                $posts = Post::with('user')->orderBy('created_at', 'Desc')->paginate($postsPerPage);
            }

        $data = array (
            'posts'=>$posts,
            'searchTerm' => $request->searchTerm
            );

        return view ('posts.index')->with($data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, Post::$rules);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by = Auth::id();
        $post->save();


        Log::info('Inputs for create'.http_build_query($request->input()));

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was SAVED successfully');


        return redirect()->action('PostsController@show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $upVotes = $post->getUpVotes();
        $downVotes = $post->getDownVotes();
        $data = array (
            'post' => $post,
            'upVotes' => $upVotes,
            'downVotes' => $downVotes
            );
        return view ('posts.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $data = array('post' => $post);
        return view('posts.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, Post::$rules);

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was UPDATED successfully');

        return redirect()->action('PostsController@show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was DELETED successfully');

        return redirect()->action('PostsController@index');
    }

    public function addVote(Request $request)
    {
        Model::unguard();

        $vote = Vote::with('post')->firstOrCreate([
            'post_id' => $request->input('post_id'),
            'user_id' => $request->input('user_id')
            ]);
        $vote->vote = $request->input('vote');
        $vote->save();

        Model::reguard();

    }




}
