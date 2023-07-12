<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Comment;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'image'];

    public function comments()
{
    return $this->hasMany(Comment::class);
}


}
