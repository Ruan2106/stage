@extends('app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <hr/>

    <article>
        <p>{{ $article->body }}</p>
    </article>


@stop