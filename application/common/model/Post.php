<?php

namespace app\common\model;

use think\Model;

class Post extends Model
{
    protected $table = 'posts';

    //一对多
    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id');
    }
    //多对多
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'posts_tags','post_id');
    }
}
