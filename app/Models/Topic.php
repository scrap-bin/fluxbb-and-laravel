<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';

    public $timestamps = false;

    protected $fillable = [
        'poster',
        'subject',
        'posted',
        'first_post_id',
        'last_post',
        'last_post_id',
        'last_poster',
        'num_views',
        'num_replies',
        'closed',
        'sticky',
        'moved_to',
        'forum_id',
    ];

    public function forum()
    {
        return $this->belongsTo(Forum::class, 'forum_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'topic_id', 'id');
    }

    public function firstPost()
    {
        return $this->hasOne(Post::class, 'id', 'first_post_id');
    }

    public function lastPost()
    {
        return $this->hasOne(Post::class, 'id', 'last_post_id');
    }

    public function movedTo()
    {
        return $this->hasOne(Topic::class, 'id', 'moved_to');
    }

}
