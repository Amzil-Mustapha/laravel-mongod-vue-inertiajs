<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    public function categorie()
    {
        return $this->belongsToMany(Categorie::class, 'article_categorie')->withPivot('name');
    }
}