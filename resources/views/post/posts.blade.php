@extends('layouts.main')
@section('content')
    <div class="mt-5">
        <span> Posts page</span>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>{{ $post->likes }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
