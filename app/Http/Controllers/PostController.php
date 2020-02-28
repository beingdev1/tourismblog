<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use Auth; //allows to use the user request info

class PostController extends Controller
{

    //create a new function to show in hoempage after writng route for it

    public function homepage()
    {
        $posts= Post::paginate(5);

        return view ('..\welcome',['posts'=> $posts]);


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //see post only u have posted
        $loggedInUserId= Auth::id();
        $posts=Post::all()->where('user_id',$loggedInUserId);
        return view('addBlog/add',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addBlog/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//create model (Post) connection
        $post= new Post;

      $postTitle = $request->title;
      $postBody = $request->body;
      $postImage= $request->image;
      //get user id
      $postUserId = Auth::id();//to use auth we must add use auth in top

      $post->user_id =($postUserId);

      $post->title= $postTitle;
      $post->body=$postBody;
      $post->image=$postImage;
      $post->save();

      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
