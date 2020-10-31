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
}
