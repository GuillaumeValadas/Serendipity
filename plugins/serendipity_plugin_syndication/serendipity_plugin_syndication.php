<?php

class serendipity_plugin_syndication extends serendipity_plugin {
    var $title = SYNDICATION;

    function introspect(&$propbag)
    {
        $propbag->add('name',          SYNDICATION);
        $propbag->add('description',   SHOWS_RSS_BLAHBLAH);
        $propbag->add('stackable',     true);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '2.0');
        $propbag->add('configuration', array(
                                        'title',
                                        'fullfeed',
                                        'big_img',
                                        'subToMe',
                                        'show_2.0',
                                        'show_atom1.0',
                                        'show_2.0c',
                                        'show_feedburner',
                                        'seperator',
                                        'show_mail',
                                        'field_managingEditor',
                                        'field_webMaster',
                                        'field_ttl',
                                        'field_pubDate',
                                        'seperator',
                                        'iconURL',
                                        'bannerURL',
                                        'bannerWidth',
                                        'bannerHeight',
                                        'seperator',
                                        'fb_id',
                                        'fb_title',
                                        'fb_alt',
                                        'fb_img',
                                        'feed_name',
                                        'comment_name'
                                       )
        );
        $propbag->add('groups',        array('FRONTEND_VIEWS'));
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            case 'title':
                $propbag->add('type',        'string');
                $propbag->add('name',        TITLE);
                $propbag->add('description', TITLE_FOR_NUGGET);
                $propbag->add('default',     SYNDICATE_THIS_BLOG);
                break;

            case 'fullfeed':
                $radio['value'][] = 'false';
                $radio['desc'][]  = NO;

                $radio['value'][] = 'true';
                $radio['desc'][]  = YES;

                $radio['value'][] = 'client';
                $radio['desc'][]  = 'Client';

                $propbag->add('type',        'radio');
                $propbag->add('name',        SYNDICATION_PLUGIN_FULLFEED);
                $propbag->add('description', '');
                $propbag->add('default',     false);
                $propbag->add('radio_per_row', '3');
                $propbag->add('radio',        $radio);
                break;

            case 'show_2.0':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        SYNDICATION_PLUGIN_20);
                $propbag->add('description', '');
                $propbag->add('default',     'yes');
                break;

            case 'show_2.0c':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        SYNDICATION_PLUGIN_20c);
                $propbag->add('description', '');
                $propbag->add('default',     'false');
                break;
            case 'show_atom1.0':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        sprintf(SYNDICATION_PLUGIN_GENERIC_FEED, 'Atom 1.0'));
                $propbag->add('description', '');
                $propbag->add('default',     'false');
                break;

            case 'show_feedburner':
                $radio = array();
                $radio['value'][] = 'false';
                $radio['desc'][]  = NO;

                $radio['value'][] = 'true';
                $radio['desc'][]  = YES;

                $radio['value'][] = 'force';
                $radio['desc'][]  = FORCE;

                $propbag->add('type',        'radio');
                $propbag->add('radio_per_row', '3');
                $propbag->add('radio',       $radio);
                $propbag->add('name',        sprintf(SYNDICATION_PLUGIN_GENERIC_FEED, 'FeedBurner'));
                $propbag->add('description', SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2);
                $propbag->add('default',     'false');
                break;

            case 'seperator':
                $propbag->add('type',        'seperator');
                break;

            case 'show_mail':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        SYNDICATION_PLUGIN_SHOW_MAIL);
                $propbag->add('description', '');
                $propbag->add('default',     false);
                break;

            case 'field_managingEditor':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_MANAGINGEDITOR);
                $propbag->add('description', SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC);
                $propbag->add('default',     '');
                break;

            case 'field_webMaster':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_WEBMASTER);
                $propbag->add('description', SYNDICATION_PLUGIN_WEBMASTER_DESC);
                $propbag->add('default',     '');
                break;

            case 'field_ttl':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_TTL);
                $propbag->add('description', SYNDICATION_PLUGIN_TTL_DESC);
                $propbag->add('default',     '');
                break;

            case 'field_pubDate':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        SYNDICATION_PLUGIN_PUBDATE);
                $propbag->add('description', SYNDICATION_PLUGIN_PUBDATE_DESC);
                $propbag->add('default',     true);
                break;

            case 'iconURL':
                $propbag->add('type',        'string');
                $propbag->add('name',        XML_IMAGE_TO_DISPLAY);
                $propbag->add('description', '');
                $propbag->add('default',     'img/xml.gif');
                break;

            case 'bannerURL':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_BANNERURL);
                $propbag->add('description', SYNDICATION_PLUGIN_BANNERURL_DESC);
                $propbag->add('default',     '');
                break;

            case 'bannerWidth':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_BANNERWIDTH);
                $propbag->add('description', SYNDICATION_PLUGIN_BANNERWIDTH_DESC);
                $propbag->add('default',     '');
                break;

            case 'bannerHeight':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_BANNERHEIGHT);
                $propbag->add('description', SYNDICATION_PLUGIN_BANNERHEIGHT_DESC);
                $propbag->add('default',     '');
                break;

            case 'fb_id':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_FEEDBURNERID);
                $propbag->add('description', SYNDICATION_PLUGIN_FEEDBURNERID_DESC . ' ' . SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD);
                $propbag->add('default',     '');
                break;

            case 'fb_img':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_FEEDBURNERIMG);
                $propbag->add('description', SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC);
                $propbag->add('default',     'fbapix.gif');
                break;

            case 'fb_title':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_FEEDBURNERTITLE);
                $propbag->add('description', SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC);
                $propbag->add('default',     '');
                break;

            case 'fb_alt':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_FEEDBURNERALT);
                $propbag->add('description', SYNDICATION_PLUGIN_FEEDBURNERALT_DESC);
                $propbag->add('default',     '');
                break;

            case 'big_img':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_BIGIMG);
                $propbag->add('description', SYNDICATION_PLUGIN_BIGIMG_DESC);
                $propbag->add('default',     'templates/2k11/img/subtome.png');
                break;

            case 'feed_name':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_FEEDNAME);
                $propbag->add('description', SYNDICATION_PLUGIN_FEEDNAME_DESC);
                $propbag->add('default',     '');
                break;

             case 'comment_name':
                $propbag->add('type',        'string');
                $propbag->add('name',        SYNDICATION_PLUGIN_COMMENTNAME);
                $propbag->add('description', SYNDICATION_PLUGIN_COMMENTNAME_DESC);
                $propbag->add('default',     '');
                break;

            case 'subToMe':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        SYNDICATION_PLUGIN_SUBTOME);
                $propbag->add('description', SYNDICATION_PLUGIN_SUBTOME_DESC);
                $propbag->add('default',     true);
                break;


            default:
                return false;
        }
        return true;
    }

    function generate_content(&$title)
    {
        global $serendipity;

        $title = $this->get_config('title');
        $small_icon  = serendipity_getTemplateFile($this->get_config('iconURL', 'img/xml.gif'));

        $custom_feed = trim($this->get_config('feed_name'));
        $custom_comm = trim($this->get_config('comment_name'));
        $custom_img  = trim($this->get_config('big_img'));
        $subtome     = serendipity_db_bool($this->get_config('subToMe', true));
        $useRss = serendipity_db_bool($this->get_config('show_2.0', true));
        $useAtom = serendipity_db_bool($this->get_config('show_atom1.0', false));

        $icon = $small_icon;
        if (!empty($custom_img) && $custom_img != 'default' && $custom_img != 'none' && $custom_img != 'empty') {
            $icon = $custom_img;
        }

        if (empty($custom_feed) || $custom_feed == 'default' || $custom_feed == 'none' || $custom_feed == 'empty') {
            $FEED = 'Feed';
        } else {
            $FEED = $custom_feed;
        }

        if (empty($custom_comm) || $custom_comm == 'default' || $custom_comm == 'none' || $custom_comm == 'empty') {
            $COMMENTS = COMMENTS;
        } else {
            $COMMENTS = $custom_comm;
        }

        $mainFeed = serendipity_rewriteURL(PATH_FEEDS .'/index.rss2', 'serendipityHTTPPath');
        if ($useAtom && (! $useRss)) {
            $mainFeed = serendipity_rewriteURL(PATH_FEEDS .'/atom10.xml', 'serendipityHTTPPath');
        }

        $onclick = "";
        if ($subtome) {
            $onclick=$this->getOnclick($mainFeed);
        }

        echo '<ul id="serendipity_syndication_list" style="list-style: none; margin: 0px; padding: 0px">';
        echo "<li>
                    <a id='serendipity_subtome'
                        class='serendipity_xml_icon'
                        href='$mainFeed'
                        $onclick
                    >
                        <img src='$icon' alt='XML' style='border: 0px' />
                        " . ($icon == $small_icon ?  ($useRss ? "RSS $FEED " : "Atom $FEED") : "") . " 
                    </a>
                </li>";

        if ($useAtom && $useRss) {
            if ($subtome) {
                $onclick=$this->getOnclick(serendipity_rewriteURL(PATH_FEEDS .'/atom10.xml', 'serendipityHTTPPath'));
            }
            echo "<li>
                <a class='serendipity_xml_icon'
                    href='". serendipity_rewriteURL(PATH_FEEDS .'/atom10.xml', 'serendipityHTTPPath') ."'
                    $onclick
                >
                    <img src='$small_icon' alt='ATOM/XML' style='border: 0px' />
                    Atom $FEED
                    </a>
            </li>";
        }

        if (serendipity_db_bool($this->get_config('show_2.0c', false))) {
            if ($subtome) {
                $onclick=$this->getOnclick(serendipity_rewriteURL(PATH_FEEDS .'/comments.rss2', 'serendipityHTTPPath'));
            }
            echo "<li>
                <a class='serendipity_xml_icon'
                    href='" . serendipity_rewriteURL(PATH_FEEDS .'/comments.rss2', 'serendipityHTTPPath') ."'
                    $onclick
                >
                    <img src='$small_icon' alt='XML' style='border: 0px' />
                    RSS $COMMENTS
                </a>
            </li>";
        }

        if (serendipity_db_bool($this->get_config('show_feedburner', false)) || $this->get_config('show_feedburner', false) === 'force') {
            $alt = $this->get_config('fb_alt');

            $fbid = $this->get_config('fb_id');
            if (stristr($fbid, 'http://')) {
                $url = $fbid;
            } else {
                $url = 'http://feeds.feedburner.com/' . $fbid;
            }

            $img = $this->get_config('fb_img');
            if (strlen($img) == 0) {
                $img = 'http://feeds.feedburner.com/~fc/'.$this->get_config('fb_id').'?bg=99CCFF&amp;fg=444444&amp;anim=0';
            }
?>
        <li>
            <a href="<?php echo $url; ?>"<?php if (strlen($alt) > 0) echo " title=\"$alt\""; ?>><img src="<?php echo $img; ?>" alt="" style="border:0"/></a>
            <?php
            $mytitle = $this->get_config('fb_title');
            if (strlen($mytitle) > 0) { ?>
            <a href="<?php echo $url; ?>"><?php echo $mytitle; ?></a>
            <?php } ?>
    </li>
<?php
        }

        echo '</ul>';
    }

    function getOnclick($url) {
        return "onclick=\"document.subtomeBtn=document.querySelector('#serendipity_subtome');document.subtomeBtn.dataset['subtomeFeeds']='". urlencode($url). "';var s=document.createElement('script');s.src='https://www.subtome.com/load.js';document.body.appendChild(s);return false;\"";
    }

    function generate_rss_fields(&$title, &$description, &$entries) {
        global $serendipity;
        // Check for a logo to use for an RSS feed. Can either be set by configuring the
        // syndication plugin OR by just placing a rss_banner.png file in the template directory.
        // If both is not set, we will display our happy own branding. :-)

        $bag    = new serendipity_property_bag;
        $this->introspect($bag);
        $additional_fields = array();

        if ($this->get_config('bannerURL') != '') {
            $img   = $this->get_config('bannerURL');
            $w     = $this->get_config('bannerWidth');
            $h     = $this->get_config('bannerHeight');
        } elseif (($banner = serendipity_getTemplateFile('img/rss_banner.png', 'serendipityPath'))) {
            $img = serendipity_getTemplateFile('img/rss_banner.png', 'baseURL');
            $i = getimagesize($banner);
            $w = $i[0];
            $h = $i[1];
        } else {
            $img = serendipity_getTemplateFile('img/s9y_banner_small.png', 'baseURL');
            $w = 100;
            $h = 21;
        }

        $additional_fields['image'] = <<<IMAGE
<image>
        <url>$img</url>
        <title>RSS: $title - $description</title>
        <link>{$serendipity['baseURL']}</link>
        <width>$w</width>
        <height>$h</height>
    </image>
IMAGE;

        $additional_fields['image_atom1.0'] = <<<IMAGE
<icon>$img</icon>
IMAGE;

        $additional_fields['image_rss1.0_channel'] = '<image rdf:resource="' . $img . '" />';
        $additional_fields['image_rss1.0_rdf'] = <<<IMAGE
<image rdf:about="$img">
        <url>$img</url>
        <title>RSS: $title - $description</title>
        <link>{$serendipity['baseURL']}</link>
        <width>$w</width>
        <height>$h</height>
    </image>
IMAGE;

        // Now, if set, stitch together any fields that have been configured in the syndication plugin.
        // First, do some sanity checks
        $additional_fields['channel'] = '';
        foreach($bag->get('configuration') AS $bag_index => $bag_value) {
            if (preg_match('|^field_(.*)$|', $bag_value, $match)) {
                $bag_content = $this->get_config($bag_value);

                switch($match[1]) {
                    case 'pubDate':
                        if (serendipity_db_bool($bag_content)) {
                            $bag_content = gmdate('D, d M Y H:i:s \G\M\T', $entries[0]['last_modified']);
                        } else {
                            $bag_content = '';
                        }
                        break;

                    // Each new RSS-field which needs rewrite of its content should get its own case here.

                    default:
                        break;
                }

                if ($bag_content != '') {
                    $additional_fields['channel'] .= '<' . $match[1] . '>' . $bag_content . '</' . $match[1] . '>' . "\n";
                }

            }
        }

        return $additional_fields;
    }
}

?>