<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $data = [
            'first_name' => "Ruan"
        ];
        return view('index',$data);
    }

    public function contact(){
        return view('pages.contact');
    }

    public function about(){
        $people = [
//            'Faka', 'Fawaka', 'Wagwan'
        ];
        return view('pages.about', compact('people'));
    }
}
