@extends('layouts.base')

@section('title', 'Блог')

@section('content')
<div class="mb-5">

    <h1 class="mb-5">Блог</h1>

@if(empty($posts))
    Нет ни одного поста
@else

    @foreach($posts as $post)
    <div class="mb-5">
        <h6>
            <a href="{{route('blog.show', $post->id)}}">{{$post->title}}</a>
        </h6>

        <p>
            {{$post->content}}
        </p>
    </div>
    @endforeach
@endif

@endsection
</div>