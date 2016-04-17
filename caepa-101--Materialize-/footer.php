<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package CAEPA-101
 */

?>

	</div><!-- #content -->
	
    <footer id="colophon" class="site-footer page-footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    
                    <a href="https://www.facebook.com/caepa.co" class="transparent facebook btn-floating btn-large waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Facebook"><i class="fa fa-facebook"></i></a><!-- facebook -->
                    <a href="https://twitter.com/intent/follow?screen_name=caepa_co" class="transparent twitter btn-floating btn-large waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Follow Us"><i class="fa fa-twitter"></i></a><!-- twitter -->
                    <a href="https://www.linkedin.com/company/colorado-adult-education-professional-association-caepa-" class="transparent linkedin btn-floating btn-large waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Linked-In"><i class="fa fa-linkedin"></i></a><!-- linked-in -->
                    <a class="disabled transparent googleplus btn-floating btn-large waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="g+"><i class="fa fa-google-plus"></i></a><!-- g+ -->
                    <a href="blog.caepa.org/rss" class="transparent rss btn-floating btn-large waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="RSS"><i class="fa fa-rss"></i></a><!-- rss -->
                </div><!-- social row left -->
                
                <div class="col l4 offset-l2 s12">
                    <a class="btn-large col s12 modal-trigger waves-effect waves-light" href="#modal-contact_us"><span class="fa fa-paper-plane-o">&emsp;</span>Contact Us</a><!-- Contact Us -->
                    <div class="col s12 no-padding">
                        <?php echo do_shortcode('[contact-form-7 id="33" title="Contact Us"]'); ?>
                    </div>
                </div><!-- social row right -->
            </div><!-- social row -->
                    
            <div class="row">
                <div class="col l6 s12">
                    <?php dynamic_sidebar( 'footer-01' ); ?>                    
                </div>
                
                <div class="col l4 offset-l2 s12">                    
                    <?php dynamic_sidebar( 'footer-02' ); ?>
                    <?php wp_nav_menu( array(
                        'theme_location' => 'secondary',
                        'container' => '',
                        'menu_id' => 'main-nav',
                        'menu_class' => 'white-text',
                        'items_wrap' => '<ul id="%1s" class="%2$s">%3$s</ul>' 
                        ) ); 
                    ?>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                  &copy; <?php echo date('Y'); ?> CAEPA, All rights reserved.

                <a class="grey-text text-lighten-4 right" href="mailto:jason.kilpatrick@caepa.org">Designed by: Jason Kilpatrick</a>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
