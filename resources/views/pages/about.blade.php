@extends('app')

@section('content')

    <h1>About</h1>

    <h3>Mensen</h3>

    @if(count($people))
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
    @endif


    <p>Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de
    standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker
    een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken.</p>
@stop