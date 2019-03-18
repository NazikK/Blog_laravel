@extends('layouts.app')

@section('content')

<hr>
<a href="/posts" class="btn btn-primary">Назад</a>
<h1>{{$post->title}}</h1>
<img style="width:100%"  src="/storage/cover_images/{{$post->cover_image}}">
<div>
    {!!$post->body!!}
</div>
<hr>
<small>Wriiten on {{$post->created_at}} by {{$post->user->name}}</small>
<hr>
@auth
    @if(Auth::user()->id == $post->user_id)
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
{!! Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST','class'=>'float-right'])!!}
   
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}    
{!!Form::close()!!}
@endif
@endauth
@endsection