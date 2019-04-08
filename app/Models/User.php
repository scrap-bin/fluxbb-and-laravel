<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public $timestamps = false;

    protected $fillable = [
        'group_id',
        'username',
        'password',
        'email',
        'title',
        'realname',
        'url',
        'jabber',
        'icq',
        'msn',
        'aim',
        'yahoo',
        'location',
        'signature',
        'disp_topics',
        'disp_posts',
        'email_setting',
        'notify_with_post',
        'auto_notify',
        'show_smilies',
        'show_img',
        'show_img_sig',
        'show_avatars',
        'show_sig',
        'timezone',
        'dst',
        'time_format',
        'date_format',
        'language',
        'style',
        'num_posts',
        'last_post',
        'last_search',
        'last_email_sent',
        'last_report_sent',
        'registered',
        'registration_ip',
        'last_visit',
        'admin_note',
        'activate_string',
        'activate_key',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'g_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'poster_id', 'id');
    }
}
