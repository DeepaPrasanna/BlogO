@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-light">Go back</a>
<h1>{{$post->name}}</h1>
<div>
<h3>{!!$post->body!!}</h3>
</div>
<hr>
<small>{{$post->created_at}} by {{$post->name}}</small>
<hr>
@if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>

    {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST', 'class'=>"float-right"])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
@endif
@endsection
