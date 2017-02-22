<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\Eloquent\PostRepository as Post;
use Response;

class PostController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(['posts' => $this->post->all()]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return Response::json(['post' => $this->post->findBySlug($slug, null, ['user','comments','category'])]);
    }
    //show recent posts 
    public function recents(){
        dd($this->post->recents());
        return Response::json(['recents' =>$this->post->recents()]);
    }
}
