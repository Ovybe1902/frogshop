<!-- resources/views/articles/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des articles</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Author</th>
                    <th>Publish Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->id_article }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{!! $article->content !!}</td>
                        <td>{{ $article->author }}</td>
                        <td>{{ $article->publish_date }}</td>
                        <td>
                            <a href="{{ route('articles.show', ['id' => $article->id_article]) }}" class="btn btn-primary">Voir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
