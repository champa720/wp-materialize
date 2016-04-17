<?php
/**
 * Template part for displaying posts.
 *
 * @package CAEPA-101
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('collection-item avatar'); ?>>
	<header class="entry-header">
        
        <?php echo get_the_post_thumbnail($page->ID, 'thumbnail', array(
            'class' => "circle")); ?>
        
		<?php the_title( sprintf( '<span class="title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span>' ); ?>
                
        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="entry-meta">
                <?php caepa_101_posted_on(); ?>
            </div><!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'caepa-101' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'caepa-101' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
    

	<footer class="entry-footer">
        
        <a href="%s" class="secondary-content"><i class="fa fa-external-link"></i></a>
		<!-- <?php caepa_101_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
