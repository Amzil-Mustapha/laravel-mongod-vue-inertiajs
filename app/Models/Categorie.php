<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $primaryKey = 'id';

    public function article()
    {
        return $this->belongsToMany(Article::class, 'article_categorie')->withPivot('name');
    }
}