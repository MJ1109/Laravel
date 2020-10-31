<?php

namespace App\Http\Controllers;
use DB;
use App\Post;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\InvalidTag;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()
        ->sortByDesc('created_at');

        return view('index', [
            'posts' => $posts
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::findOrFail($id);

        return view('post',["post"=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        request()->validate([
            'title'=> 'required',
            'image'=> 'required|ends_with:.jpg,.png,.jpeg',
            'type'=> 'required',
            'year'=> 'required',
            'description'=> 'required'

        ]);

        //not the best way, but it works. Only has a lot of repition
        $post= new Post();
        $post->title = request('title');
        $post->image = request('image');
        $post->type = request ('type');
        $post->year = request ('year');
        $post->description = request ('description');
        $post->save();

        return redirect('/post');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view ('edit',['post'=>$post]);
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
        $post=Post::findOrFail($id);

        //validation
        request()->validate([
            'title'=> 'required',
            'image'=> 'required|ends_with:.jpg',
            'type'=> 'required',
            'year'=> 'required',
            'description'=> 'required'

        ]);

        $post->title = request('title');
        $post->image = request('image');
        $post->type = request ('type');
        $post->year = request ('year');
        $post->description = request ('description');
        $post->save();



        return redirect('/post/'.$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
