@extends('layouts.main')
@section('content')
    <div>
       <div>
           {{ $post->id }}. {{ $post->title }}
       </div>
        <div>
            {{ $post->content }}
        </div>
        <div>
            <a href="{{ route('post.edit',$post->id) }}">Редактировать пост</a>
        </div>
        <div>
            <form action="{{ route('post.delete',$post->id) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить пост" class="btn btn-danger">
            </form>
        </div>
        <a href="{{ route('post.index') }}">Вернутся к списку</a>
    </div>
@endsection
