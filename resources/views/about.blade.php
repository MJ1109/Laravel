@extends('layout')
    @section('content')

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   About this site
                </div>

                <div type="text" class="text" id="rules">
                    <p> In this site, you're able to rate the movies or series you've seen.</br>
                        This site does have a few rules:
                        <ol>
                        <li>In order to rate a movie, you'll need to have an account </li>
                        <li>If you want to add a movie to the list, you have to have left a comment on at least three movies</li>
                        <li>Unapropriate behaviour will result in a deleted account</li>
                        </ol>
                    </p>
                </div>
{{----}}
                <div class="links">
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://vapor.laravel.com">Vapor</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
                </div>
            </div>
        </div>
    </body>
</html>
