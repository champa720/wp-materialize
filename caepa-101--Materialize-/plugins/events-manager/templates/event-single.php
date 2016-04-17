<?php
/* 
 * Remember that this file is only used if you have chosen to override event pages with formats in your event settings!
 * You can also override the single event page completely in any case (e.g. at a level where you can control sidebars etc.), as described here - http://codex.wordpress.org/Post_Types#Template_Files
 * Your file would be named single-event.php
 */
/*
 * This page displays a single event, called during the the_content filter if this is an event page.
 * You can override the default display settings pages by copying this file to yourthemefolder/plugins/events-manager/templates/ and modifying it however you need.
 * You can display events however you wish, there are a few variables made available to you:
 * 
 * $args - the args passed onto EM_Events::output() 
 */
global $EM_Event;
/* @var $EM_Event EM_Event */
?>

<div class=" col s12">
    <ul class="collection">
        <li class="collection-item avatar">
            <img src="<?php echo $EM_Event->output('#_CATEGORYIMAGEURL'); ?>" alt="" class="circle">
            <span class="title" style="font-weight:600"><?php echo $EM_Event->output('#_EVENTCATEGORIES'); ?></span>
            <p>Organizer</p>
        </li>
    </ul>
</div>

<div class=" col s12">
    <div class="card">
        <div class="card-content flow-text">
            <span class="card-title grey-text text-darken-4">Event</span>
            <p><strong><?php echo $EM_Event->output('#_EVENTNAME'); ?></strong></p>
            <p><i class="fa fa-calendar fa-fw">&emsp;</i><?php echo $EM_Event->output('#_{l, F, j Y}'); ?></p>
            <p><i class="fa fa-fw">&emsp;</i><?php echo $EM_Event->output('#@_{l, F, j Y}'); ?></p>
        </div>
        <div class="card-action">
            <a class="teal-text tooltipped" data-position="right" data-delay="50" data-tooltip="Add to Google Calendar" target="_blank" href="<?php echo $EM_Event->output('#_EVENTGCALURL'); ?>"><i class="fa fa-calendar-plus-o fa-fw">&emsp;</i>Google Calendar</a>
            <a class="teal-text tooltipped" data-position="right" data-delay="50" data-tooltip="Add to iCal" target="_blank" href="<?php echo $EM_Event->output('#_EVENTICALURL'); ?>"><i class="fa fa-calendar-plus-o fa-fw">&emsp;</i>iCal</a>
        </div>
    </div>
</div>

<div class=" col s12">
    <div class="card">            
        <div class="card-image col s12 m7 no-padding right">
            <img src="https://maps.googleapis.com/maps/api/staticmap?&zoom=14&scale=2&size=512x256&markers=<?php echo $EM_Event->output('#_LOCATIONNAME+#_LOCATIONADDRESS+#_LOCATIONTOWN+#_LOCATIONSTATE+#_LOCATIONPOSTCODE'); ?>">
            <span class="card-title grey-text text-darken-4 hide-on-med-and-up">Venue</span>
        </div>
        <div class="card-content col s12 m5 flow-text">
                <span class="card-title grey-text text-darken-4 hide-on-small-only">Venue</span>
                <p><strong><?php echo $EM_Event->output('#_LOCATIONNAME'); ?></strong></p>
                <p><i class="fa fa-map-marker fa-fw">&emsp;</i><?php echo $EM_Event->output('#_LOCATIONADDRESS'); ?></p>
                <p><i class="fa fa-fw">&emsp;</i><?php echo $EM_Event->output('#_LOCATIONTOWN, #_LOCATIONSTATE #_LOCATIONPOSTCODE'); ?></p>
                <p><i class="fa fa-phone fa-fw">&emsp;</i><?php echo $EM_Event->output('#_LATT{LOCATIONPHONE}'); ?></p>
        </div>
        <div class="card-action col s12">            
            <a class="teal-text tooltipped" data-position="right" data-delay="50" data-tooltip="Open Google Maps" target="_blank" href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=<?php echo $EM_Event->output('#_LOCATIONNAME+#_LOCATIONADDRESS+#_LOCATIONTOWN+#_LOCATIONSTATE+#_LOCATIONPOSTCODE'); ?>"><i class="fa fa-map-o fa-fw">&emsp;</i>Google Map</a>
            <a class="teal-text tooltipped" data-position="right" data-delay="50" data-tooltip="Visit Website" target="_blank"href="<?php echo $EM_Event->output('#_LATT{LOCATIONWEBSITE}'); ?>"><i class="fa fa-desktop fa-fw">&emsp;</i><?php echo $EM_Event->output('#_ATT{LOCATIONWEBSITE}'); ?></a>
        </div>
    </div>
</div>


<div class=" col s12">
    <div class="card">
        <div class="card-content flow-text">
            <span class="card-title grey-text text-darken-4">Details</span>
            <?php echo $EM_Event->output('#_EVENTEXCERPT'); ?>
        </div>
    </div>
</div>


<?php echo $EM_Event->output('#_EVENTNOTES'); ?><!-- formatted in editor -->
