<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoArticle extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_photo_article';

    public function article()
    {
        return $this->belongsTo(Article::class, 'id_article');
    }
}

