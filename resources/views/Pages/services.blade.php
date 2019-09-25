@extends('Layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
    @foreach ($services as $Service)
        <ul>
            <li class="list-group-item">
                {{$Service}}
            </li>
        </ul>
    @endforeach
    @endif
@endsection


