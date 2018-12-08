@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="mt-3 mb-3">
            <a href="{{ action('PostController@create') }}" class="btn btn-primary">Crate Post</a>
        </div>
        <ul class="list-group">
            @foreach($posts as $post)
                <li class="list-group-item">{{ $post->title }}</li>
            @endforeach
        </ul>
    </div>
@endsection
