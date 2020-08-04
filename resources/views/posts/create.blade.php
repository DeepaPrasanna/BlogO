@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store','method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('name', 'Title')}}
        {{Form::text('name','',['class'=>'form-control','placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body','',['id' =>'editor','class'=>'form-control','placeholder' => 'Body'])}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error=>{
        console.error(error);
    });                                             
</script>
    
@endsection
