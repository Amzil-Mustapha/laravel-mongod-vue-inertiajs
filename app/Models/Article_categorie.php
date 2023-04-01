<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Article_categorie extends Model
{
    use HasFactory;


    protected $guarded = [];

    protected $table = 'article_categorie';

    // protected $primaryKey = 'id';
}