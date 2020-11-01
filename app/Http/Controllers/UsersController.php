<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function activePost(Request $request){
        $request->validate([
            'active'=> 'required'
        ]);

        $post_id = $request->input('post_id');
        $post= Post::whereId($post_id)->first();

        $post->active = $request->input('active');
        $post->save();

        return redirect('/home');

    }
//    public function show($user){
////        $this->authorize('editUsers');
//    return $user;
//
//    }
//
//    public function store(Request $request){
//
//}
//
//    public function edit($users_id){
//        $this->authorize('editUser', $users_id);
//        return view('users.edit', [
//            'user' => $user
//        ]);
//    }
//    }
//
//    public function update(Request $request, $id)
//    {
//        $user=User::findOrFail($id);
//
//        //validation
//        request()->validate([
//            'name'=> 'required',
//            'email'=>'required',
//        ]);
//
//        $user->name = request('name');
//        $user->email=request('email');
//
//        $user->save();
//
//
//
//        return redirect('/post/'.$user->id);
//    }
}
