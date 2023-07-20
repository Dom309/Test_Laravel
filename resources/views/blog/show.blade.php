@extends('layouts.base')

@section('title')
    {{$post->title}}
@endsection

@section('content')

<h1 class="mb-5">
    {{$post->title}}
</h1>

<p>
    {!! $post->content !!}
</p>

<a href="{{ route('blog') }}">
    Назад
</a>

@endsection