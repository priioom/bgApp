@extends('Layouts.app')
@section('content')
<a href="/bgapp/public/posts" class="btn btn-default">Go Back</a>
<h3>{{$post->title}}</h1>
    <hr/>
    <div>
        {!!$post->body!!}
    <div>

<small>Written on {{$post->created_at}} by {{$post ->user->name}}</small>
<hr>
<a href="/bgapp/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open(['action'=>['PostsController@destroy', $post->id],'method'=>'POST','class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::Close()!!}
<p>No data found........</p>
@endsection