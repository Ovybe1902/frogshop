<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_article';

    public function photoArticles()
    {
        return $this->hasMany(PhotoArticle::class, 'id_article');
    }
}

