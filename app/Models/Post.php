<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public $timestamps = false;

    protected $fillable = [
        'poster',
        'poster_id',
        'poster_ip',
        'poster_email',
        'message',
        'hide_smilies',
        'posted',
        'edited',
        'edited_by',
        'topic_id',
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

    public function posterUser()
    {
        return $this->belongsTo(User::class, 'poster_id', 'id');
    }
}
