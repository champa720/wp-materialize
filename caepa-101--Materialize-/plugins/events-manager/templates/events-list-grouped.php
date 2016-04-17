<?php
/*
 * Default Events List Template
 * This page displays a list of events, called during the em_content() if this is an events list page.
 * You can override the default display settings pages by copying this file to yourthemefolder/plugins/events-manager/templates/ and modifying it however you need.
 * You can display events however you wish, there are a few variables made available to you:
 * 
 * $args - the args passed onto EM_Events::output()
 * 
 */
$args = apply_filters('em_content_events_args', $args);

if (class_exists('EM_Events')) {
    echo em_events::output_grouped( array (
        'mode'          => 'monthly',
        'date_format'   => 'F Y',
        'scope'         => 'future',
        //'format_header' => '';
        'format'        => '
        
        <div class="col s12">
            <div class="card hoverable">
                <div class="card-image waves-effect waves-block waves-light">
                    {has_image}<img class="activator" src="#_EVENTIMAGEURL">{/has_image}
                    {no_image}<img style="height:256px" class="grey">{/no_image}
                    <span class="card-title">#_ATT{SUBTITLE}</span>
                </div>
                <div class="card-content">
                    #_EVENTLINK
                    <button class="activator btn-floating btn-large waves-effect waves-light teal tooltipped" data-position="left" data-delay="50" data-tooltip="More Information"><i class="fa fa-info"></i></button>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">#_EVENTNAME<i class="fa fa-close right"></i></span>
                    <p><i class="fa fa-calendar fa-fw">&emsp;</i><strong>#_EVENTDATES</strong></p>
                    <p><i class="fa fa-map-marker fa-fw">&emsp;</i><strong>#_LOCATIONNAME</strong><br />
                       <i class="fa fa-fw">&emsp;</i>#_LOCATIONADDRESS<br />
                       <i class="fa fa-fw">&emsp;</i>#_LOCATIONTOWN, #_LOCATIONSTATE #_LOCATIONPOSTCODE</p>
                    <p><i class="fa fa-dollar fa-fw">&emsp;</i>#_EVENTPRICERANGEALL</p>
                    <a class="btn waves-effect waves-light tooltipped" data-position="right" data-delay="50" data-tooltip="View Event" href="#_EVENTURL">#_EVENTNAME</a>
                </div>
            </div>
        </div>',
    ));
}



?>