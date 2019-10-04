@extends('Layouts.app')
@section('content')
<a href="/bgapp/public/posts" class="btn btn-default">Go Back</a>
<h3>{{$post->title}}</h1>
    <hr/>
    <div class="col-md-12 col-sm-12">
            <img  class="img-responsive" src="../storage/cover_images/{{$post -> cover_image}}">
            </div>
    <div>
        {!!$post->body!!}
    <div>

<small>Written on {{$post->created_at}} by {{$post ->user->name}}</small>
<hr>
@if(!Auth::guest())
@if(Auth::user() -> id == $post -> user_id)
<a href="/bgapp/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open(['action'=>['PostsController@destroy', $post->id],'method'=>'POST','class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::Close()!!}
@endif
@endif
<p>No data found........</p>
@endsection