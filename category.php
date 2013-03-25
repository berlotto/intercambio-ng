<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
				</header>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<a href="<?php the_permalink();?>"><?php the_post_thumbnail(); ?></a>
					</div><!-- .entry-page-image -->
				<?php endif; ?>
				
				<div class="entry-content">
					<?php //the_content(); ?>
					<?php the_excerpt(); ?> 
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
				</div><!-- .entry-content -->
				<footer class="entry-meta">
					Em: <?php the_time('j/m/Y g:i A') ?>
					<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
					<a clss="leiamais" href="<?php the_permalink();?>">Leia mais</a>
				</footer><!-- .entry-meta -->
			</article>
			<?php
			endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>