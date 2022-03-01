<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cate_Post extends Model
{
    use HasFactory;

    protected $table = 'cate__post';
    protected $fillable = ['cate_title'];

    public function posts(){
        return $this->hasMany(Post::class, 'post_id');
    }
}
