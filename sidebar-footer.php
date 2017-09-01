<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solus
 */
?>

<div id="tertiary" class="footer-widget-area">
	<?php for ($widget_num = 1; $widget_num <= 3; $widget_num++) :?>
		<div class="block footer-widget-<?php echo $widget_num ?>">
			<?php if ( ! dynamic_sidebar( "footer-widget-".$widget_num ) ): ?>
				<h3 class="footer-widget-title"><?php _e('Widget Title','solus') ?></h3> Add Some
				<a href="<?php echo site_url(); ?>/wp-admin/widgets.php" target="_blank">
					<?php _e('Widgets','solus') ?>
				</a>
			<?php endif ?>
		</div><!-- /footer-widget-num -->
	<?php endfor; ?>
</div><!-- #secondary -->
