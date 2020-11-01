<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Likes;

class LikesController extends Controller
{
    public function store(Request $request, $id)
    {
        $user = User::find(Auth::id());

        //checks if user has less than 1 post, if yes:redirect to the same page where the user tried to like
        if ($user->num_of_posts < 1){
            return redirect('/posts/' . $id);
        }

        // Checks if post is already liked by the current user, also counts the likes
        $likes = Likes::where('post_id', $id)
            ->where('user_id', Auth::id())
            ->count();

        // Check if there aren't any likes with same post_id and user_id, create a new like
        if ($likes == 0){

            $like = new Likes();

            $like->user_id = Auth::id();
            $like->post_id = $id;

            $like->save();
        }

        return redirect('/posts/' . $id);
    }

}
