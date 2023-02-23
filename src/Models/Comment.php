<?php

namespace Newindianic\PackageDemo\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Newindianic\PackageDemo\Models\Article;

class Comment extends Model
{
    use HasFactory;
    public function article() {
        return $this->belongsTo(Article::class);
    }

}
