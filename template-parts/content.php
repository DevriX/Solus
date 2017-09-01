<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Solus
 */

?>

<div class="post_thumb">
	<?php if (has_post_thumbnail()){ the_post_thumbnail(); } ?>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="content-wrapper">
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php 
			$the_content = preg_replace("/<img[^>]+\>/i", " ", get_the_content() );
			echo force_balance_tags( html_entity_decode( wp_trim_words( htmlentities( $the_content ), 100, " [...]" ) ) );
			?>
		</div><!-- .entry-content -->

		<footer class="home-entry-footer">
			<?php solus_home_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
