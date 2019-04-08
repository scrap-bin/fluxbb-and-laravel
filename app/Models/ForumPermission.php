<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumPermission extends Model
{
    protected $table = 'forum_perms';

    protected $primaryKey = ['group_id', 'forum_id'];

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'group_id',
        'forum_id',
        'read_forum',
        'post_replies',
        'post_topics',
    ];
}
