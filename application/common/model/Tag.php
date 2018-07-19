<?php

namespace app\common\model;

use think\Model;

class Tag extends Model
{
    protected $table = 'tags';

    //多对多
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_tags', 'tag_id');
    }
}
