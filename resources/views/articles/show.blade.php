<!-- resources/views/articles/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p>Author: {{ $article->author }}</p>
        <p>Publish Date: {{ $article->publish_date }}</p>
        <div>{!! $article->content !!}</div>
    </div>
@endsection
