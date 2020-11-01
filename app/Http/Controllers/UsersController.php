<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $this->authorize('viewUsers');

        $users = User::all()
            ->sortByDesc('created_at');

        return view('users.index', [
            'users' => $users
        ]);
    }

//    public function update(Request $request, $id)
//    {
//        $post=Post::findOrFail($id);
//
//        //validation
//        request()->validate([
//            'title'=> 'required',
//            'genre'=>'required',
//            'image'=> 'required|ends_with:.jpg',
//            'type'=> 'required',
//            'year'=> 'required',
//            'description'=> 'required'
//
//        ]);
//
//        $post->title = request('title');
//        $post->genre_id=request('genre');
//        $post->image = request('image');
//        $post->type = request ('type');
//        $post->year = request ('year');
//        $post->description = request ('description');
//        $post->save();
//
//
//
//        return redirect('/post/'.$post->id);
//    }
}
