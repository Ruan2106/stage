<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Dit is voor mensen die een form invullen, wat mogen mensen invullen? Bijvoorbeeld naam en adres GEEN ID'S!//
    //Protected fillable zijn velden die zichtbaar kunnen zijn//


    protected $fillable = [
        'title', 'body', 'published_at'
    ];
}

/////COMMANDS FOR MYSQL/////
/////  PHP ARTISAN TINKER om in MYSQL Command Line te komen  /////
/////  $article = new App\Article; Maakt nieuwe article modify able /////
/////  $article->title = 'Text'     /////
/////  $article->published_at = Carbon\Carbon::now(); Pakt datum van vandaag  /////
/////  $article->toArray(); Laat alle data tabellen zien die je hebt gegeven  /////
/////  $article->save(); Slaat alles wat je zojuist hebt gegeven op in db  /////
/////  App\Article::all()->toArray();  Laat alle databases zien met de gegevens in een array  /////
/////  $article->toArray(); Laat alle fillables zien + de unfillables  /////
/////  $article = App\Article::find(1); Laat article zien met ID 1  /////
/////  $article = App\Article::where('body', 'Text')->get(); Krijgt de rij van de db waar de body 'Text' is  /////
/////  $article = App\Article::where('body', 'Text')->first(); Pakt de eerste rij van db waar body is 'Text'  /////

/////  $article = App\Article::create(['title' => 'text']); Maakt sneller een db rij, MassassignmentException wordt gegooid als je dingen toekent zonder dat ze fillable zijn /////
/////  App\Article::all()->toArray(); Laat alle kolommen van alle rijen zien  /////
/////  $article = App\Article::find(2) Vind de db rij van ID = 2  /////
/////  $article->update(['body' => 'Update text']); Update van database zonder te hoeven saven  /////


/////MIGRATIONS/////
/////  Migrations worden gebruikt om makkelijker versiebeheer te gebruiken voor databases  /////
/////  Een Model is een plek waar je de fillables aangeeft voor de klant bijvoorbeeld Titel of Body en niet ID  /////
/////  In de database staat altijd meervoud, bijvoorbeeld Articles, een model is enkelvoud  /////

