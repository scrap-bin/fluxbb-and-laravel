<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ $settings['o_board_title'] }}</title>
    <link rel="stylesheet" type="text/css" href="style/{{ $settings['o_default_style'] }}.css" />
    <link rel="alternate" type="application/atom+xml" href="extern.php?action=feed&amp;type=atom" title="Atom active topics feed" />
</head>

<body>

<div id="punindex" class="pun">
    <div class="top-box"></div>
    <div class="punwrap">

        <div id="brdheader" class="block">
            <div class="box">
                <div id="brdtitle" class="inbox">
                    <h1><a href="index.php">My FluxBB Forum</a></h1>
                    <div id="brddesc"><p><span>Unfortunately no one can be told what FluxBB is - you have to see it for yourself.</span></p></div>
                </div>
                <div id="brdmenu" class="inbox">
                    <ul>
                        <li id="navindex" class="isactive"><a href="index.php">Index</a></li>
                        <li id="navuserlist"><a href="userlist.php">User list</a></li>
                        <li id="navsearch"><a href="search.php">Search</a></li>
                        <li id="navprofile"><a href="profile.php?id=2">Profile</a></li>
                        <li id="navadmin"><a href="admin_index.php">Administration</a></li>
                        <li id="navlogout"><a href="login.php?action=out&amp;id=2&amp;csrf_token=fa5593b255be336d70b8c180846ea9a31b346e81">Logout</a></li>
                    </ul>
                </div>
                <div id="brdwelcome" class="inbox">
                    <ul class="conl">
                        <li><span>Logged in as <strong>admin</strong></span></li>
                        <li><span>Last visit: Today 05:03:57</span></li>
                    </ul>
                    <ul class="conr">
                        <li><span>Topics: <a href="search.php?action=show_replies" title="Find topics you have posted to.">Posted</a> | <a href="search.php?action=show_new" title="Find topics with new posts since your last visit.">New</a> | <a href="search.php?action=show_recent" title="Find topics with recent posts.">Active</a> | <a href="search.php?action=show_unanswered" title="Find topics with no replies.">Unanswered</a></span></li>
                    </ul>
                    <div class="clearer"></div>
                </div>
            </div>
        </div>



@yield('content')

        <div id="brdfooter" class="block">
            <h2><span>Board footer</span></h2>
            <div class="box">
                <div id="brdfooternav" class="inbox">
                    <div class="conl">
                        <form id="qjump" method="get" action="viewforum.php">
                            <div><label><span>Jump to<br /></span>
                                    <select name="id" onchange="window.location=('viewforum.php?id='+this.options[this.selectedIndex].value)">
                                        <optgroup label="Test category">
                                            <option value="1">Test forum</option>
                                        </optgroup>
                                    </select></label>
                                <input type="submit" value=" Go " accesskey="g" />
                            </div>
                        </form>
                    </div>
                    <div class="conr">
                        <p id="feedlinks"><span class="atom"><a href="extern.php?action=feed&amp;type=atom">Atom active topics feed</a></span></p>
                        <p id="poweredby">Powered by <a href="http://fluxbb.org/">FluxBB</a></p>
                    </div>
                    <div class="clearer"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="end-box"></div>
</div>

</body>
</html>
