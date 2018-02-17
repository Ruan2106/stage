<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;



/////  OM DE MODEL DATA TE GEBRUIKEN: USE APP\NAAM-MODEL DAN KUN JE MODEL::ALL DOEN  /////


class ArticlesController extends Controller
{
    public function index(){
        $article = Article::all();

        return view('articles.index')->with('articles', $article);
    }

    // Hier ontvang je de id van de routes web //
    public function show($id){
        // Als er 5 Artikelen zijn in de database heb je id 1 tot 5 dus 6 bestaat niet bij 6 failed ie //
        $article = Article::findOrFail($id);

        return view('articles.show')->with('article', $article);
    }
}
