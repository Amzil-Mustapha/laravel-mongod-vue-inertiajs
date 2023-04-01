<?php

use App\Http\Controllers\GlobalController;
use App\Http\Controllers\StaticController;
use App\Models\Article;
use App\Models\Article_categorie;
use App\Models\Categorie;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $username = session('username');
    return Inertia::render('App', compact('username'));
})->middleware('login');

Route::post('/login', [GlobalController::class, 'login']);
Route::get('/logout', [GlobalController::class, 'logout']);
Route::get('/post', [StaticController::class, 'post'])->middleware('login');
Route::get('/article', [StaticController::class, 'article'])->middleware('login');
Route::post('/article/edit', [StaticController::class, 'article_edit'])->middleware('login');
Route::post('/article/update', [StaticController::class, 'article_update'])->middleware('login');
Route::post('/article/delete', [StaticController::class, 'article_delete'])->middleware('login');


// Route::get('/', function () {
//     return User::where('_id', '6426363c9214599bc704bacb')->get()->first()->post;
// });







// $category = new Categorie;
// $category->name = 'musta';
// $category->save();

// $art1 = new Article;

// $art1->title = 'younnes';
// $art1->body = 'younnes body';

// $art2 = new Article;

// $art2->title = 'musta';
// $art2->body = 'musta body';

// $art3 = new Article;

// $art3->title = 'anans';
// $art3->body = 'anas body';

// $category->article()->saveMany([
//     $art1,
//     $art2,
//     $art3,
// ],[
//     ['name' => 'salma'],
//     ['name' => 'ana'],
//     ['name' => 'nta']
// ]);
