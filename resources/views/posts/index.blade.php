@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts)>0)
        
            @foreach($posts as $post)
            <div class="card bg-light p-3 mb-2">
            <h3 class="mb-0"><a href="/posts/{{$post->id}}">{{$post->name}}</a><h3>
                <small>written on {{$post->created_at}} by {{$post->name}}</small>
            </div>
            @endforeach
            {{$posts->links()}}

        
    @else
        <p>There are no posts</p>
        
    @endif
    
@endsection
