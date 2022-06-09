@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a href="{{ route('post.create') }}" class="btn btn-primary mb-2">Добавить пост</a>
        </div>
        @foreach($posts as $post)
            <div>
                <a href="{{ route('post.show',$post->id) }}" style="text-decoration: none;">
                    {{ $post->id }}. {{ $post->title }}
                </a>
            </div>
        @endforeach
    </div>
@endsection
