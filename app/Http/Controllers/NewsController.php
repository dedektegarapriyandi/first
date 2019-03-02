<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //News
    public function news()
    {
        return view('news');
    }
}
