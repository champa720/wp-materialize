<div class="col s12 no-padding">
    <div class="parallax-container valign-wrapper <?php echo $select_1; ?> <?php echo $select_2; ?>">
        <div class="container">
            <h2><?php echo $title; ?></h2>
            <p class="flow-text"><?php echo $textarea; ?></p>
            <a class="btn waves-effect waves-light modal-trigger" href="#mailchimp-sign-up"><?php echo $link_1; ?></a><!-- Modal Trigger -->
        </div>
    </div><!-- Parallax-Container -->
</div>



<div class="modal modal-fixed-footer" id="mailchimp-sign-up">
	<main class="modal-content">
        <!-- Begin MailChimp Signup Form -->

        <div id="mc_embed_signup">
        <form action="//caepa.us6.list-manage.com/subscribe/post?u=ef793a4f17661be843b30ff51&amp;id=7377e46553" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
            <h4><?php echo $modal_title ?></h4>
            
            <div class="row">
            <div class="mc-field-group input-field col s12">
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
            <label for="mce-EMAIL">Email Address</label>
            </div>
            </div>
            
            <div class="row">
            <div class="mc-field-group input-field col s12">
            <select name="group[15093]" class="REQ_CSS" id="mce-group[15093]">
            <option value="" disabled selected>Choose Yes or No</option>
            <option value="16">Yes</option>
            <option value="32">No</option>
            </select>
            <label for="mce-group[15093]">Would you like to receive CAEPA's Newsletter? </label>
            </div>
            </div>

            <div class="mc-field-group input-group input-field col s12">
            <strong>Send me information about </strong>
            <ul>
            <li>
            <input type="checkbox" value="1" name="group[14905][1]" id="mce-group[14905]-14905-0"><label for="mce-group[14905]-14905-0">General News</label>
            </li>
            <li>
            <input type="checkbox" value="2" name="group[14905][2]" id="mce-group[14905]-14905-1"><label for="mce-group[14905]-14905-1">Events and Conferences</label>
            </li>
            <li>
            <input type="checkbox" value="4" name="group[14905][4]" id="mce-group[14905]-14905-2"><label for="mce-group[14905]-14905-2">Legislative Alerts</label>
            </li>
            <li>
            <input type="checkbox" value="8" name="group[14905][8]" id="mce-group[14905]-14905-3"><label for="mce-group[14905]-14905-3">Volunteer Opportunities</label>
            </li>
            </ul>
            </div>

            <div id="mce-responses" class="clear">
            <div class="response red-text" id="mce-error-response" style="display:none"></div>
            <div class="response green-text" id="mce-success-response" style="display:none"></div>
            </div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

            <div style="position: absolute; left: -5000px;">
            <input type="text" name="b_ef793a4f17661be843b30ff51_7377e46553" tabindex="-1" value="">
            </div>
    </main>

    <footer class="modal-footer">
    <div class="clear">
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn">
    <a class="modal-action modal-close waves-effect waves-red btn-flat"><i class="fa fa-close">&emsp;</i>Close</a>
    </div>
    </footer><!-- modal-footer -->
            
</div><!-- mc_embed_signup_scroll -->
</form>
</div><!-- Embed Sign-Up -->
</div><!-- Modal Structure -->

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>

<script type='text/javascript'>
    (function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='LNAME';ftypes[2]='text';fnames[1]='FNAME';ftypes[1]='text';fnames[3]='MEMBERSHIP';ftypes[3]='text';fnames[4]='ZIP';ftypes[4]='zip';fnames[9]='ORG';ftypes[9]='text';fnames[5]='MMERGE5';ftypes[5]='address';fnames[7]='MMERGE7';ftypes[7]='text';fnames[6]='STATE';ftypes[6]='text';fnames[8]='PHONE';ftypes[8]='text';}(jQuery));
    var $mcj = jQuery.noConflict(true);
</script>


    
<!--End mc_embed_signup-->