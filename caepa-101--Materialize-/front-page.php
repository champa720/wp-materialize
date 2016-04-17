<?php
/**
 * This is the Front Page template
 *
 * @package CAEPA-101
 */

get_header(); ?>

	<div id="primary" class="content-area front-page">        
		<main id="main" role="main">
            <div class="slider">
                <ul class="slides">
                    <?php
                    //this is normally where the WP Loop would be. Instead we add a loop to get pods stuff 
                    $mypod = pods('slider');
                    $mypod->find('name.meta_value ASC');
                        while ( $mypod->fetch() ) :
                            // set our variables
                            $slide_pre_hed            = $mypod->field('slide_pre_hed');
                            $slide_hed                = $mypod->field('slide_hed');
                            $slide_dek                = $mypod->field('slide_dek');
                            $featured_image           = $mypod->field('post_thumbnail_url.large');
                            $button_text_01           = $mypod->field('button_text_01');
                            $button_url_01            = $mypod->field('button_url_01');
                            $button_01_class          = $mypod->field('button_01_class');
                            $button_text_02           = $mypod->field('button_text_02');
                            $button_url_02            = $mypod->field('button_url_02');
                            $button_02_class          = $mypod->field('button_02_class');
                            ?>
                            <li>
                                <img src="<?php echo $featured_image; ?>">
                                
                                <div class="caption left-align">

                                    <p><?php echo $slide_pre_hed; ?></p>
                                    <h2><?php echo $slide_hed; ?></h2>
                                    <h5 class="light grey-text text-lighten-3"><?php echo $slide_dek; ?></h5>

                                    <a class="btn waves-effect waves-light <?php echo $button_01_class; ?> <?php if( empty( $button_url_01 ) ) echo "disabled" ?> tooltipped" data-position="bottom" data-delay="50" data-tooltip="<?php echo $button_url_01; ?>" href="<?php echo  $button_url_01; ?>" <?php if( empty( $button_text_01 ) ) echo "style='display:none'" ?>><?php echo  $button_text_01; ?></a>

                                    <a class="btn waves-effect waves-light <?php echo $button_02_class; ?> <?php if( empty( $button_url_02 ) ) echo "disabled" ?> tooltipped" data-position="bottom" data-delay="50" data-tooltip="<?php echo $button_url_02; ?>" href="<?php echo  $button_url_02; ?>" <?php if( empty( $button_text_02 ) ) echo "style='display:none'" ?>><?php echo  $button_text_02; ?></a>

                                </div>
                            </li>
                        <?php endwhile; ?>
                  </ul>
            </div><!-- slider -->
            
            <?php dynamic_sidebar( 'frontpage-01' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>
                
                <section class="valign-wrapper grey">
                    <div class="container aligncenter center-align">
                        <h1>Partners</h1>
                        <div class="row">
                            <div class="col s6 m3">
                                <div class="card-panel hoverable small">
                                    <a href="http://www.coabe.org"><img src="http://www.caepa.org/wp-content/uploads/2015/06/Logo-COABE-vertical.jpg"></a>
                                </div>
                            </div><!-- COABE -->
                            <div class="col s6 m3">
                                <div class="card-panel hoverable small">
                                    <a href="http://www.mpaea.org"><img src="http://www.caepa.org/wp-content/uploads/2015/06/Logo-MPAEA-color.png"></a>
                                </div>
                            </div><!-- MPAEA -->
                        </div><!-- Row -->
                    </div>
                </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
