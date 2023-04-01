<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StaticController extends Controller
{
    public function post()
    {
        $post = Post::where('user_id', session('_id'))->get()->first();

        if (!is_null($post)) {
            # code...
            $articles = Article::where('post_id', $post->_id)->get();
            return Inertia::render('Post', compact(['post', 'articles']));
        }

        $post = ['title' => 'No Post Yet'];
        return Inertia::render('Post', compact('post'));

    }

    public function article_edit(Request $request)
    {
        $article = Article::where('_id', $request)->get()->first();
        return Inertia::render('Update_article', compact('article'));
    }
}