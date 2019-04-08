<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forums';

    public $timestamps = false;

    protected $fillable = [
        'forum_name',
        'forum_desc',
        'redirect_url',
        'moderators',
        'num_topics',
        'num_posts',
        'last_post',
        'last_post_id',
        'last_poster',
        'sort_by',
        'disp_position',
        'cat_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }

    public function topics()
    {
        return $this->hasMany(Topic::class, 'forum_id', 'id');
    }

    public function lastPost()
    {
        return $this->hasOne(Post::class, 'id', 'last_post_id');
    }

    public function permissions()
    {
        return $this
            ->belongsToMany(Group::class, 'forum_perms', 'forum_id', 'group_id')
            ->as('forum_permissions')
            ->withPivot('read_forum', 'post_replies', 'post_topics');
    }
}
