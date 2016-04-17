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
echo $EM_Event->output_single();
?>
<h4>Event Related Placeholders</h4>
<?php echo $EM_Event->output('#_EVENTID'); ?>
<?php echo $EM_Event->output('#_EVENTPOSTID'); ?>
<?php echo $EM_Event->output('#_EVENTNAME'); ?>
<?php echo $EM_Event->output('#_EVENTNOTES'); ?>
<?php echo $EM_Event->output('#_EVENTEXCERPT'); ?>
<?php echo $EM_Event->output('#_EVENTEXCERPT{10,...}'); ?>
<?php echo $EM_Event->output('#_EVENTIMAGE'); ?>
<?php echo $EM_Event->output('#_EVENTIMAGE{50,50}'); ?>
<?php echo $EM_Event->output('#_EVENTCATEGORIES'); ?>
<?php echo $EM_Event->output('#_EVENTCATEGORIESIMAGES'); ?>
<?php echo $EM_Event->output('#_EVENTTAGS'); ?>

<h4>Event Related Placeholders | Date and Times</h4>
<?php echo $EM_Event->output('#_24HSTARTTIME'); ?>
<?php echo $EM_Event->output('#_24HENDTIME'); ?>
<?php echo $EM_Event->output('#_12HSTARTTIME'); ?>
<?php echo $EM_Event->output('#_12HENDTIME'); ?>
<?php echo $EM_Event->output('#_EVENTTIMES'); ?>
<?php echo $EM_Event->output('#_EVENTDATES'); ?>

<h4>Event Related Placeholders | Links/URLs</h4>
<?php echo $EM_Event->output('#_EVENTIMAGEURL'); ?>
<?php echo $EM_Event->output('#_EVENTURL'); ?>
<?php echo $EM_Event->output('#_EVENTLINK'); ?>
<?php echo $EM_Event->output('#_EDITEVENTLINK'); ?>
<?php echo $EM_Event->output('#_EDITEVENTURL'); ?>

<h4>Event Related Placeholders | Custom Attributes</h4>
<?php echo $EM_Event->output('#_ATT{key}'); ?>
<?php echo $EM_Event->output('#_ATT{key}{alternative text}'); ?>

<h4>Event Related Placeholders | Bookings</h4>
<?php echo $EM_Event->output('#_BOOKINGFORM'); ?>
<?php echo $EM_Event->output('#_BOOKINGBUTTON'); ?>
<?php echo $EM_Event->output('#_AVAILABLESPACES'); ?>
<?php echo $EM_Event->output('#_BOOKEDSPACES'); ?>
<?php echo $EM_Event->output('#_PENDINGSPACES'); ?>
<?php echo $EM_Event->output('#_SPACES'); ?>
<?php echo $EM_Event->output('#_ATTENDEES'); ?>
<?php echo $EM_Event->output('#_ATTENDEESPENDINGLIST'); ?>
<?php echo $EM_Event->output('#_BOOKINGSURL'); ?>
<?php echo $EM_Event->output('#_BOOKINGSLINK'); ?>
<?php echo $EM_Event->output('#_EVENTPRICERANGE'); ?>
<?php echo $EM_Event->output('#_EVENTPRICERANGEALL'); ?>
<?php echo $EM_Event->output('#_EVENTPRICEMIN'); ?>
<?php echo $EM_Event->output('#_EVENTPRICEMAX'); ?>
<?php echo $EM_Event->output('#_TICKETNAME'); ?>

<h4>Event Related Placeholders | Contact Details</h4>
<?php echo $EM_Event->output('#_CONTACTNAME'); ?>
<?php echo $EM_Event->output('#_CONTACTUSERNAME'); ?>
<?php echo $EM_Event->output('#_CONTACTEMAIL'); ?>
<?php echo $EM_Event->output('#_CONTACTURL'); ?>
<?php echo $EM_Event->output('#_CONTACTPHONE'); ?>
<?php echo $EM_Event->output('#_CONTACTAVATAR'); ?>
<?php echo $EM_Event->output('#_CONTACTPROFILELINK'); ?>
<?php echo $EM_Event->output('#_CONTACTPROFILEURL'); ?>
<?php echo $EM_Event->output('#_CONTACTID'); ?>
<?php echo $EM_Event->output('#_CONTACTMETA'); ?>

<h4>Event Related Placeholders | iCal/Calendar</h4>
<?php echo $EM_Event->output('#_EVENTICALURL'); ?>
<?php echo $EM_Event->output('#_EVENTICALLINK'); ?>
<?php echo $EM_Event->output('#_EVENTGCALURL'); ?>
<?php echo $EM_Event->output('#_EVENTGCALLINK'); ?>

<h4>Location Related Placeholders</h4>
<?php echo $EM_Event->output('#_LOCATIONID'); ?>
<?php echo $EM_Event->output('#_LOCATIONPOSTID'); ?>
<?php echo $EM_Event->output('#_LOCATIONADDRESS'); ?>
<?php echo $EM_Event->output('#_LOCATIONTOWN'); ?>
<?php echo $EM_Event->output('#_LOCATIONSTATE'); ?>
<?php echo $EM_Event->output('#_LOCATIONPOSTCODE'); ?>
<?php echo $EM_Event->output('#_LOCATIONREGION'); ?>
<?php echo $EM_Event->output('#_LOCATIONCOUNTRY'); ?>
<?php echo $EM_Event->output('#_LOCATIONLONGITUDE'); ?>
<?php echo $EM_Event->output('#_LOCATIONLATITUDE'); ?>
<?php echo $EM_Event->output('#_LOCATIONMAP'); ?>
<?php echo $EM_Event->output('#_LOCATIONNOTES'); ?>
<?php echo $EM_Event->output('#_LOCATIONEXCERPT'); ?>
<?php echo $EM_Event->output('#_LOCATIONEXCERPT{10, ...}'); ?>
<?php echo $EM_Event->output('#_LOCATIONIMAGE'); ?>
<?php echo $EM_Event->output('#_LOCATIONIMAGE{50,50}'); ?>
<?php echo $EM_Event->output('#_LOCATIONIMAGEURL'); ?>
<?php echo $EM_Event->output('#_LOCATIONFULLLINE'); ?>
<?php echo $EM_Event->output('#_LOCATIONFULLLINE'); ?>
<?php echo $EM_Event->output('#_LOCATIONFULLBR'); ?>

<h4>Location Related Placeholders | Custom Attributes</h4>
<?php echo $EM_Event->output('##_LATT{key}'); ?>
<?php echo $EM_Event->output('##_LATT{key}{alternative text}'); ?>
<?php echo $EM_Event->output('##_LATT{key}{option 1|option 2|option 3|etc.}'); ?>

<h4>Location Related Placeholders | Links</h4>
<?php echo $EM_Event->output('#_LOCATIONURL'); ?>
<?php echo $EM_Event->output('#_LOCATIONLINK'); ?>
<?php echo $EM_Event->output('#_EDITLOCATIONLINK'); ?>
<?php echo $EM_Event->output('#_EDITLOCATIONURL'); ?>

<h4>Location Related Placeholders | Related Events</h4>
<?php echo $EM_Event->output('#_LOCATIONPASTEVENTS'); ?>
<?php echo $EM_Event->output('#_LOCATIONNEXTEVENTS'); ?>
<?php echo $EM_Event->output('#_LOCATIONALLEVENTS'); ?>
<?php echo $EM_Event->output('#_LOCATIONNEXTEVENT'); ?>

<h4>Location Related Placeholders | iCal/RSS Feeds</h4>
<?php echo $EM_Event->output('#_LOCATIONICALURL'); ?>
<?php echo $EM_Event->output('#_LOCATIONICALLINK'); ?>
<?php echo $EM_Event->output('#_LOCATIONRSSURL'); ?>
<?php echo $EM_Event->output('#_LOCATIONRSSLINK'); ?>
<?php echo $EM_Event->output('#_LOCATIONNEXTEVENT'); ?>

<h4>Booking Related Placeholders | Individual Booking Information</h4>
<?php echo $EM_Event->output('#_BOOKINGID'); ?>
<?php echo $EM_Event->output('#_BOOKINGNAME'); ?>
<?php echo $EM_Event->output('#_BOOKINGEMAIL'); ?>
<?php echo $EM_Event->output('#_BOOKINGPHONE'); ?>
<?php echo $EM_Event->output('#_BOOKINGSPACES'); ?>
<?php echo $EM_Event->output('#_BOOKINGCOMMENT'); ?>
<?php echo $EM_Event->output('#_BOOKINGTICKETNAME'); ?>
<?php echo $EM_Event->output('#_BOOKINGTICKETDESCRIPTION'); ?>
<?php echo $EM_Event->output('#_BOOKINGTICKETPRICE'); ?>
<?php echo $EM_Event->output('#_BOOKINGTICKETS'); ?>
<?php echo $EM_Event->output('#_BOOKINGSUMMARY'); ?>

<h4>Booking Related Placeholders | Pricing Information</h4>
<?php echo $EM_Event->output('#_BOOKINGPRICE'); ?>
<?php echo $EM_Event->output('#_BOOKINGPRICETAX'); ?>
<?php echo $EM_Event->output('#_BOOKINGPRICEWITHOUTTAX'); ?>
<?php echo $EM_Event->output('#_BOOKINGPRICEWITHTAX'); ?>

<h4>Booking Related Placeholders | Ticket Information</h4>
<?php echo $EM_Event->output('#_BOOKINGTICKETS'); ?>
<?php echo $EM_Event->output('#_BOOKINGTICKETDESCRIPTION'); ?>
<?php echo $EM_Event->output('#_BOOKINGTICKETPRICE'); ?>
<?php echo $EM_Event->output('#_BOOKINGTICKETTAX'); ?>
<?php echo $EM_Event->output('#_BOOKINGTICKETPRICEWITHTAX'); ?>
<?php echo $EM_Event->output('#_BOOKINGTICKETPRICEWITHOUTTAX'); ?>

<h4>Booking Related Placeholders | Links</h4>
<?php echo $EM_Event->output('#_BOOKINGLISTURL'); ?>

<h4>Booking Related Placeholders | Gateway-Specific Information</h4>
<?php echo $EM_Event->output('#_BOOKINGTXNID'); ?>

<h4>Booking Related Placeholders | Coupon Information</h4>
<?php echo $EM_Event->output('#_BOOKINGCOUPON'); ?>
<?php echo $EM_Event->output('#_BOOKINGCOUPONCODE'); ?>
<?php echo $EM_Event->output('#_BOOKINGCOUPONNAME'); ?>
<?php echo $EM_Event->output('#_BOOKINGCOUPONDISCOUNT'); ?>
<?php echo $EM_Event->output('#_BOOKINGCOUPONDESCRIPTION'); ?>

<h4>Category Placeholders | Category Details</h4>
<?php echo $EM_Event->output('#_CATEGORYNAME'); ?>
<?php echo $EM_Event->output('#_CATEGORYID'); ?>
<?php echo $EM_Event->output('#_CATEGORYSLUG'); ?>
<?php echo $EM_Event->output('#_CATEGORYCOLOR'); ?>
<?php echo $EM_Event->output('#_CATEGORYIMAGE'); ?>
<?php echo $EM_Event->output('#_CATEGORYIMAGE{50,50}'); ?>
<?php echo $EM_Event->output('#_CATEGORYIMAGEURL'); ?>
<?php echo $EM_Event->output('#_CATEGORYNOTES'); ?>

<h4>Category Placeholders | Related Events</h4>
<?php echo $EM_Event->output('#_CATEGORYPASTEVENTS'); ?>
<?php echo $EM_Event->output('#_CATEGORYNEXTEVENTS'); ?>
<?php echo $EM_Event->output('#_CATEGORYALLEVENTS'); ?>
<?php echo $EM_Event->output('#_CATEGORYNEXTEVENT'); ?>

<h4>Category Placeholders | iCal/RSS Feeds</h4>
<?php echo $EM_Event->output('#_CATEGORYICALURL'); ?>
<?php echo $EM_Event->output('#_CATEGORYICALLINK'); ?>
<?php echo $EM_Event->output('#_CATEGORYRSSURL'); ?>
<?php echo $EM_Event->output('#_CATEGORYRSSLINK'); ?>

<h4>Conditional Placeholders | Examples</h4>
<div style="float:right; margin:0px 0px 15px 15px;">#_MAP</div>
<p>
	<strong>Date/Time</strong><br/>
	Date(s) - #_EVENTDATES<br /><i>#_EVENTTIMES</i>
</p>
<p>
	<strong>Location</strong><br/>
	#_LOCATIONLINK
</p>
<p>
	<strong>Category(ies)</strong>
	#_CATEGORIES
</p>
<br style="clear:both" />
#_NOTES
{has_bookings}
<h3>Bookings</h3>
#_BOOKINGFORM
{/has_bookings}

<ul>[events_list scope="year"]<li>#_EVENTLINK - Dates : #_EVENTDATES, Times : #_EVENTTIMES</li>[/events_list]</ul>


<div class="col s12 m6">
  <table class="card-panel striped center-align">
    <thead class="materialize-red lighten-3 white-text">
      <tr>
        <th class="center-align" colspan="2" data-field="id">Early Bird Registration</th>
      </tr>
    </thead>

    <tbody>
      <tr class="white-text red lighten-2">
        <td class="center-align" colspan="2">Register before October 1st, 2015</td>
      </tr>

      <tr style="font-size:1.5rem;font-weight: 300;">
        <td class="center-align">1 Day</td>

        <td class="center-align">2 Day</td>
      </tr>

      <tr style="font-size:1.2rem;font-weight: 400;">
        <td class="center-align">$110</td>

        <td class="center-align">$150</td>
      </tr>

      <tr >
        <td class="center-align" colspan="2">
          <a class="btn waves-effect waves-light tooltipped" data-delay="50" data-position="right" data-tooltip="Vist Our Marketplace" href="https://mkt.com/caepa/conference-registration">Online Registration</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<a class="btn tooltipped" data-position="right" data-delay="50" data-tooltip="Open Google Maps" target="_blank" href="http://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=<?php echo $EM_Event->output('#_LOCATIONNAME+#_LOCATIONADDRESS+#_LOCATIONTOWN+#_LOCATIONSTATE+#_LOCATIONPOSTCODE'); ?>">+ Google Map</a>

<a class="btn tooltipped" data-position="right" data-delay="50" data-tooltip="Add to Google Calendar" target="_blank" href="<?php echo $EM_Event->output('#_EVENTGCALURL'); ?>">+ Google Calendar</a>

<a class="btn tooltipped" data-position="right" data-delay="50" data-tooltip="Add to iCal" target="_blank" href="<?php echo $EM_Event->output('#_EVENTICALURL'); ?>">+ iCal</a>

<div class="parallax-container">
  <div class="parallax">
      <img src="https://maps.googleapis.com/maps/api/staticmap?&zoom=15&scale=2&size=512x1024&
markers=
<?php echo $EM_Event->output('#_LOCATIONNAME+#_LOCATIONADDRESS+#_LOCATIONTOWN+#_LOCATIONSTATE+#_LOCATIONPOSTCODE'); ?>">
    </div>
</div>