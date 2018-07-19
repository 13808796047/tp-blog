<?php

namespace app\common\model;

use think\Model;

class Comment extends Model
{
    protected $table = 'comments';

    //多对一
    public function post()
    {
        return $this->belongsTo(Post::class,'post_id');
    }
}
