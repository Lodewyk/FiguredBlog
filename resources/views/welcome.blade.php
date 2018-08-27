@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ route('new') }}">New Post</a>
                    <a href="{{ route('logout') }}">Log out</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Figured Blog
            </div>

            <div class="post-list">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="post-title">{{ $post->title }}</div>
                        <div class="post-content">{{ $post->content }}</div>
                        @if (Route::has('login'))
                            @auth
                                <div class="post-options links">
                                    <a href="{{ route('edit', array('id' => $post->_id)) }}">Edit</a>
                                    <a href="{{ route('delete', array('id' => $post->_id)) }}">Delete</a>
                                </div>
                                @endauth
                            @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection