@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            New Post
        </div>

        <form method="post" action="{{ url('/save') }}">
            @csrf
            <div class="edit-post">
                @if (!empty($post))
                    <input type="hidden" name="id" id="id" value="{{ $post->_id }}"/>
                @endif
                <div class="post-title">
                    <label for="title">Title</label>
                    <input
                            class="editable"
                            type="text"
                            id="title"
                            name="title"
                            placeholder="Post title"
                            @if (!empty($post))
                                value="{{ $post->title }}"
                            @endif
                    >
                </div>
                <div class="post-content">
                    <label for="content">Content</label>
                    <textarea class="editable" id="content" name="content" rows="10">@if (!empty($post)){{ $post->content }}@endif</textarea>
                </div>
            </div>
            <div class="edit-options">
                <button type="submit" class="btn btn-success">Save</button>
                <a href="">Cancel</a>
            </div>
        </form>
    </div>
@endsection