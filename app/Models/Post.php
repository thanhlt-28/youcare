<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = ['post_id','title', 'desc', 'content', 'image_post'];

    public function cate__posst(){
        return $this->belongsTo(Cate_Post::class, 'cate_title');
    }
}

