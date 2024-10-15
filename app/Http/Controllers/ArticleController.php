<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Article::select('article_name', 'article_description');
        if (Auth::user()->role_id == 1) {
            $data = $data->limit(3);
        } elseif (Auth::user()->role_id == 2) {
            $data = $data->limit(10);
        }
        $data = $data->get();

        return view('article', compact('data'));
    }
}
