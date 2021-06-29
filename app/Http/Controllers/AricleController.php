<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AricleController extends Controller
{
    public function index(Article $article)
    {
        $articles = $article->all();
        return view('article.index', compact('articles'));
    }
}
