<?php

namespace App\Http\Controllers;

use App\Models\Forum;

class FrontpageController extends Controller
{
    public function index()
    {
        $groupId = 4; // DEBUG!!! g_id=4 - Members
        $forums = Forum::with('category:id,cat_name,disp_position')
            ->leftJoin('forum_perms', 'forum_perms.forum_id', '=', 'forums.id')
            ->whereNull('forum_perms.read_forum')
            ->orWhere(function($query) use($groupId) {
                $query->where('forum_perms.group_id', '=', $groupId)->where('forum_perms.read_forum', '=', 1);
            })
            ->get()
            ->sortBy(function($val) {
                return [$val->category->disp_position, $val->category->id, $val->disp_position];
            });
        return view('index', compact('forums'));
    }
}
