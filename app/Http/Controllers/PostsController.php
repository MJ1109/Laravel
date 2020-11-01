<?php

namespace App\Http\Controllers;
use App\Genre;
use DB;
use App\Post;
use App\Likes;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $posts = Post::where('active', 1)
            ->orderByDesc('created_at')
            ->get();


        return view('posts.index', [
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
        $genre=Genre::where('id', $post->genre_id)->first();
        $likes =Likes::where('post_id', $id)->get()->count();

        return view('posts.post',[
            "post"=>$post,
            "genre"=>$genre,
            "likes"=>$likes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
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
            'genre'=>'required',
            'image'=> 'required|ends_with:.jpg,.png,.jpeg',
            'type'=> 'required',
            'year'=> 'required',
            'description'=> 'required'

        ]);

        //not the best way, but it works, has a lot of repition
        $post= new Post();
        $post->title = request('title');
        $post->genre_id = request('genre');
        $post->image = request('image');
        $post->type = request ('type');
        $post->year = request ('year');
        $post->description = request ('description');
        $post->user_id = Auth::id(); //links the user id to the post
        $post->save();

        $user=User::findOrFail (Auth ::id());
        $user->num_of_posts++;
        $user->save();

        return redirect('/posts');
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

        $this->authorize('editPost', $post);

        return view ('posts.edit',['post'=>$post]);
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
            'genre'=>'required',
            'image'=> 'required|ends_with:.jpg',
            'type'=> 'required',
            'year'=> 'required',
            'description'=> 'required'

        ]);

        $post->title = request('title');
        $post->genre_id=request('genre');
        $post->image = request('image');
        $post->type = request ('type');
        $post->year = request ('year');
        $post->description = request ('description');
        $post->save();

        return redirect('/posts/'.$post->id);
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


    public function search(Request $request)
    {
        $request->validate([
        'search'=> 'max:255',
        'genre' => 'nullable'
        ]);

        //make variables out of the search inputs
        $search = $request->input('search');
        $genre = $request ->input('genre');

        //queries when filtering with/without genres
        if ($genre == null ){
        $posts=Post::where('title', 'LIKE', '%'.$search.'%' )
        ->where ('active', 1)
        ->latest()
        ->get();
        } else{
        $posts=Post::where('title', 'LIKE', '%'.$search.'%')
        ->where('genre_id', $genre)
        ->where('active', 1)
        ->latest()
        ->get();
        }

        return view('posts.index',[
                    "posts"=>$posts,
                    "genre"=>$genre
                ]);
    }
}
