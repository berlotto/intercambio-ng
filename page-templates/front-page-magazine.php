<?php
/**
 * Template Name: Front Page Magazine
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<div id="left-sidebar" class="widget-area">
				<div class="content-front">
            	<?php
                query_posts( array( "cat"=>6, "posts_per_page"=>5 ) );
                // start the wordpress loop!
                if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'content', 'page-front' ); ?>
					<!-- <a class="leiamais" href="<?php the_permalink();?>">Leia mais</a> -->

                <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
                <?php wp_reset_query(); ?> 
				</div>
				
				<?php if ( is_active_sidebar( 'sidebar-front-left' ) ) : ?>
				<div class="first front-widgets">
					<?php dynamic_sidebar( 'sidebar-front-left' ); ?>
				</div><!-- .first -->
				<?php endif; ?>
			</div>

			<div id="right-container">

				<div id="top" class="widget-area">
					<?php if ( is_active_sidebar( 'sidebar-front-top' ) ) : ?>
					<div class="first front-widgets">
						<?php dynamic_sidebar( 'sidebar-front-top' ); ?>
					</div><!-- .first -->
					<?php endif; ?>
				</div>

				<div id="primary"  class="site-content">
				
					<?php while ( have_posts() ) : the_post(); ?>
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="entry-page-image">
								<?php the_post_thumbnail(); ?>
							</div><!-- .entry-page-image -->
						<?php endif; ?>

						<?php get_template_part( 'content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>

				</div>

				<div id="left" class="widget-area">
					<?php if ( is_active_sidebar( 'sidebar-front-half' ) ) : ?>
					<div class="first front-widgets">
						<?php dynamic_sidebar( 'sidebar-front-half' ); ?>
					</div><!-- .first -->
					<?php endif; ?>
				</div>
				<div id="right" class="widget-area">
					<?php if ( is_active_sidebar( 'sidebar-front-right' ) ) : ?>
					<div class="first front-widgets">
						<?php dynamic_sidebar( 'sidebar-front-right' ); ?>
					</div><!-- .first -->
					<?php endif; ?>
				</div>

			</div>


		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>