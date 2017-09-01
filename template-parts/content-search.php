<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Solus
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php solus_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		
	</header><!-- .entry-header -->
	<div class="entry-summary">
		<?php 
		$the_content = preg_replace("/<img[^>]+\>/i", " ", get_the_content() );
		echo force_balance_tags( html_entity_decode( wp_trim_words( htmlentities( $the_content ), 100, " [...]" ) ) );
		?>
	</div><!-- .entry-summary -->
	<footer class="entry-footer">
		<?php solus_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
