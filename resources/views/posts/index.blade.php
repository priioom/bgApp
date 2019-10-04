@extends('Layouts.app')
@section('content')
<div class="col-md-12 col-sm-12">
<h1>posts</h1>

@if(count($posts)> 0)
    @foreach($posts as $post)
    
           
                    <div class="col-md-4 col-sm-4">
                            <img  class="img-responsive" src="storage/cover_images/{{$post -> cover_image}}">
                            </div>
                            <div class="col-md-8 col-md-8">
                                    <h3><a href="posts/{{$post->id}}"> {{$post->title}} </a></h3> 
                                    <small>
                                        Written on {{$post->created_at}} by {{$post ->user->name}}
                                    </small>
                            </div>

   
 
    @endforeach
    {{$posts->links()}}
@else
<p>No data found........</p>
@endif
@endsection
</div>
