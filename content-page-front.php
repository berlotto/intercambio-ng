<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if( !is_home() && !is_front_page() ):?>
		<header class="entry-header">
			<h1 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
		</header>
		<?php endif; ?>

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
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
