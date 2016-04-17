<div class="col l4 offset-l2 s12">
    <a class="btn-large col s12 modal-trigger waves-effect waves-light" href="#form-test"><span class="fa fa-paper-plane-o">&emsp;</span>Form Test</a>
</div><!-- div -->

<div id="form-test" class="modal modal-fixed-footer">
<div class="modal-content">
    
<h4>Jquery-validation with materialize</h4>

    <form id="form" class="col s12" novalidate="novalidate" action="<?php esc_url( $_SERVER['REQUEST_URI'] ) ?>" method="post">
        
        <div class="row">
            <div class="input-field col s12 m6">
                <input id="cf-name" name="cf-name" type="text" value="<?php ( isset( $_POST['cf-name'] ) ? esc_attr( $_POST['cf-name'] ) : '' ) ?>" required />
                <label for="cf-name">Standard Field 1</label>
            </div>
            
            <div class="input-field col s12 m6">
                <input id="cf-email" name="cf-email" type="email" value="<?php ( isset( $_POST['cf-email'] ) ? esc_attr( $_POST['cf-email'] ) : '' ) ?>" required />
                <label for="cf-email">Email example</label>
            </div>
        </div><!-- row -->
        
        <div class="row">
            <div class="input-field col s12 m6">
                <input id="cf-subject" name="cf-subject" type="text" value="<?php ( isset( $_POST['cf-subject'] ) ? esc_attr( $_POST['cf-subject'] ) : '' ) ?>" required />
                <label for="cf-subject">Email example</label>
            </div>
        </div><!-- row -->
        
        <div class="row">
            <div class="input-field col s12">
          <textarea id="cf-message" name="cf-message" type="text" class="materialize-textarea" required><?php ( isset( $_POST['cf-message'] ) ? esc_attr( $_POST['cf-message'] ) : '' ) ?></textarea>
          <label for="cf-message">Textarea</label>
            </div>
        </div><!-- row -->
        
        <div class="row">
            <div class="input-field col s12">
                <div class="g-recaptcha" data-sitekey="6Lc65AkTAAAAAEbY55u_BtiRomTv6zeJV7F3HiWm">
                </div>
            </div>
        </div><!-- row -->
        
        </div><!-- modal content -->
    
        <div class="modal-footer">
                    <button class="btn waves-effect waves-light" name="cf-submitted" type="submit">Submit</button>
                    <a class="modal-action modal-close waves-effect waves-red btn-flat"><i class="fa fa-close">&emsp;</i>Close</a>
        </div><!-- modal footer -->
    </form>

<style>
/** FIXES for error messages https://github.com/Dogfalo/materialize/issues/1562*/
label.invalid {
    color: red;
    font-size: 0.8rem;
    left: 0;
    position: relative;
    top: -15px;
    transform: none !important;
}
</style>
    
<?php

function deliver_mail() {
 
    // if the submit button is clicked, send the email
    if ( isset( $_POST['cf-submitted'] ) ) {
 
        // sanitize form values
        $name    = sanitize_text_field( $_POST["cf-name"] );
        $email   = sanitize_email( $_POST["cf-email"] );
        $subject = sanitize_text_field( $_POST["cf-subject"] );
        $message = esc_textarea( $_POST["cf-message"] );
 
        // get the blog administrator's email address
        $to = get_option( 'admin_email' );
 
        $headers = "From: $name <$email>" . "\r\n";
 
        // If email has been process for sending, display a success message
        if ( wp_mail( $to, $subject, $message, $headers ) ) {
            echo '<div>';
            echo '<p>Thanks for contacting me, expect a response soon.</p>';
            echo '</div>';
        } else {
            echo 'An unexpected error occurred';
        }
    }
} 
?>