<?php

namespace App\Providers;
use App\Post;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //if the logged in user id === the post owner's id, he'll be able to edit the post.
        Gate::define('editPost', function (User $user, Post $post){
            if(auth::id() === $post->user_id){
                return true;
            }
        });

        Gate::define('editUser', function(User $user, User $selectedUser){
            if(Auth::id()===$selectedUser->id){
                return true;
            }
        });

//        Gate::define('UsersOverview', function(User $user){
//            if($user->admin){
//                return true;
//            }
//        });

    }
}
