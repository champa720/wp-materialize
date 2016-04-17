<?php
/**
 * Default widget template.
 *
 * Copy this template to /simple-image-widget/widget.php in your theme or
 * child theme to make edits.
 *
 * @package   SimpleImageWidget
 * @copyright Copyright (c) 2014, Blazer Six, Inc.
 * @license   GPL-2.0+
 * @since     4.0.0
 */
?>

<h6>simple-image-widget/advocacy-01_widget.php</h6>
<div id="card_reveal" class="card">
    <?php if ( ! empty( $image_id ) ) : ?>
    <div class="card-image waves-effect waves-block waves-light">
		<?php 
            echo wp_get_attachment_image(
                $image_id,
                $image_size 
            );
        ?>
    </div>
    <?php endif; ?>
    
    <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">
            <?php
            if ( ! empty( $title ) ) :
                echo $before_title . $title . $after_title;
            endif;
            ?>
            <i class="fa fa-ellipsis-v right"></i></span>
        
    <?php if ( ! empty( $link_text ) ) : ?>
	<p class="more">
		<?php
		echo $text_link_open;
		echo $link_text;
		echo $text_link_close;
		?>
	</p>
<?php endif; ?>
    </div>
    
    <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
        <?php
        if ( ! empty( $title ) ) :
            echo $before_title . $title . $after_title;
        endif;
        ?>
            <i class="fa fa-close right"></i></span>
        <p>
<?php
if ( ! empty( $text ) ) :
	echo wpautop( $text );
endif;
?>
        </p>
    </div>
</div>

<script>
jQuery(document).ready(function ($) {
    $("#card_reveal img").addClass("activator");
});
</script>