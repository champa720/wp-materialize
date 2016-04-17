<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package CAEPA-101
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
            
            <?php
                // Dynamically Adds Sidebars to Page Template
                add_action( 'loop_start', 'wpse_76959_render_widget' );
                    function wpse_76959_render_widget() {
                        is_page( 'advocacy' ) && dynamic_sidebar( 'advocacy-01' );
                        is_page( 'communications' ) && dynamic_sidebar( 'communications-01' );
                        is_page( 'contact' ) && dynamic_sidebar( 'contact-01' );
                        is_page( 'directory' ) && dynamic_sidebar( 'directory-01' );
                        is_page( 'executive' ) && dynamic_sidebar( 'executive-01' );
                        is_page( 'forum' ) && dynamic_sidebar( 'forum-01' );
                        is_page( 'history' ) && dynamic_sidebar( 'history-01' );
                        is_page( 'links' ) && dynamic_sidebar( 'links-01' );
                        is_page( 'news' ) && dynamic_sidebar( 'news-01' );
                        is_page( 'professional-development' ) && dynamic_sidebar( 'professional-development-01' );
                        is_page( 'the_board' ) && dynamic_sidebar( 'the_board-01' );
                        
                        remove_action( current_filter(), __FUNCTION__ );
                    }
            ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
            
            <!-- List posts in Category that has the same name -->
            <?php query_posts('category_name='.get_the_title().'&post_status=publish,future');?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php the_content(); ?>
            <?php endwhile; else: endif; ?>
                
                <!-- hmm how to incorporate lists into committes pages -->

				<!--<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>-->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
