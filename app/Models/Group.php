<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $primaryKey = 'g_id';

    public $timestamps = false;

    protected $fillable = [
        'g_title',
        'g_user_title',
        'g_promote_min_posts',
        'g_promote_next_group',
        'g_moderator',
        'g_mod_edit_users',
        'g_mod_rename_users',
        'g_mod_change_passwords',
        'g_mod_ban_users',
        'g_mod_promote_users',
        'g_read_board',
        'g_view_users',
        'g_post_replies',
        'g_post_topics',
        'g_edit_posts',
        'g_delete_posts',
        'g_delete_topics',
        'g_post_links',
        'g_set_title',
        'g_search',
        'g_search_users',
        'g_send_email',
        'g_post_flood',
        'g_search_flood',
        'g_email_flood',
        'g_report_flood',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'group_id', 'g_id');
    }

    public function permissions()
    {
        return $this
            ->belongsToMany(Forum::class, 'forum_perms', 'group_id', 'forum_id')
            ->as('permissions')
            ->withPivot('read_forum', 'post_replies', 'post_topics');
    }
}
