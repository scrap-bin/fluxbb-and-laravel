@extends('layouts.site')

@section('content')

    <div id="brdmain">
@foreach($forums->groupBy('cat_id') as $cid => $catForums)
        <div id="idx{{ $cid }}" class="blocktable">
        <h2><span>{{ $catForums[0]->category['cat_name'] }}</span></h2>
        <div class="box">
            <div class="inbox">
                <table>
                    <thead>
                    <tr>
                        <th class="tcl" scope="col">Forum</th>
                        <th class="tc2" scope="col">Topics</th>
                        <th class="tc3" scope="col">Posts</th>
                        <th class="tcr" scope="col">Last post</th>
                    </tr>
                    </thead>
                    <tbody>
    @foreach($catForums as $f)
                    <tr class="rowodd">
                        <td class="tcl">
                            <div class="icon"><div class="nosize">1</div></div>
                            <div class="tclcon">
                                <div>
                                    <h3><a href="viewforum.php?id={{ $f['fid'] }}">{{ $f['forum_name'] }}</a></h3>
                                    <div class="forumdesc">{{ $f['forum_desc'] }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="tc2">{{ $f['num_topics'] }}</td>
                        <td class="tc3">{{ $f['num_posts'] }}</td>
                        <td class="tcr"><a href="viewtopic.php?pid={{ $f['last_post_id'] }}#p{{ $f['last_post_id'] }}">{{ date('Y-m-d H:i:s', $f['last_post']) }}</a> <span class="byuser">by {{ $f['last_poster'] }}</span></td>
                    </tr>
    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endforeach
    </div>

    <div class="linksb">
        <div class="inbox crumbsplus">
            <p class="subscribelink clearb"><a href="misc.php?action=markread&amp;csrf_token=fa5593b255be336d70b8c180846ea9a31b346e81">Mark all topics as read</a></p>
        </div>
    </div>
    <div id="brdstats" class="block">
        <h2><span>Board information</span></h2>
        <div class="box">
            <div class="inbox">
                <dl class="conr">
                    <dt><strong>Board statistics</strong></dt>
                    <dd><span>Total number of registered users: <strong>1</strong></span></dd>
                    <dd><span>Total number of topics: <strong>1</strong></span></dd>
                    <dd><span>Total number of posts: <strong>1</strong></span></dd>
                </dl>
                <dl class="conl">
                    <dt><strong>User information</strong></dt>
                    <dd><span>Newest registered user: <a href="profile.php?id=2">admin</a></span></dd>
                    <dd><span>Registered users online: <strong>1</strong></span></dd>
                    <dd><span>Guests online: <strong>0</strong></span></dd>
                </dl>
                <dl id="onlinelist" class="clearb">
                    <dt><strong>Online: </strong></dt>
                    <dd><a href="profile.php?id=2">admin</a></dd>
                </dl>
            </div>
        </div>
    </div>
    </div>

@endsection