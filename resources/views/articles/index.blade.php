@extends('app')

@section('content')
    <h1>T is je boy</h1>
    <hr/>

    <!--- $articles komt van de ArticlesController terwijl de controller in de web naar deze view verwijst -->
    <!--- $articles komt mee met de ->with van de eerste argument 'articles' -->
    @foreach($articles as $article)
    <article>
        <h2>
            <!-- Hier kun je vervolgens id gebruiken op verschillende manieren -->
            {{--<!-- Manier 1:  {{ url('/Locatie van route zonder de id', $variabele->id) }}-->--}}
            {{--<!-- Manier 2:  {{ action ('Controller@functie', [$variabele->id]) }}-->--}}
            <a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a>
        </h2>

        <div class="body">{{ $article->body }}</div>
    </article>
    @endforeach
@stop