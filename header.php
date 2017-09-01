<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solus
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site container">
		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e( 'Skip to content', 'solus' ); ?>
		</a>
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
				<?php if ( get_theme_mod( 'solus_logo' ) ) : ?>
				<div class='site-logo'>
					<a href='<?php echo esc_url( home_url() ); ?>' title='<?php echo esc_attr( get_bloginfo( ' name ', 'display ' ) ); ?>' rel='home'>
						<img src='<?php echo esc_url( get_theme_mod( 'solus_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
					</a>
				</div>
				<?php else : ?>
				<hgroup>
					<h3 class='site-title'>
						<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
						<?php bloginfo( 'name' ); ?></a>
					</h3>
					<h2 class='site-description'>
						<?php bloginfo( 'description' ); ?>
					</h2>
				</hgroup>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<div class="nav-search">
				<a href="#sidr-main" class="navigation-button">
					<span class="icon">
						<span class="menu-text">
						<?php _e( 'Menu', 'solus' ); ?>
						</span>
					<span>
				</a>            
			<?php get_search_form(); ?>     
			</div><!-- #site-navigation -->   

			<nav id="site-navigation" class="main-navigation" role="navigation">          
				<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
				<div class="search-menu">
					<?php get_search_form(); ?>  
				</div>       
			</nav><!-- #site-navigation --> 
		</header><!-- #masthead -->  

		<div class="social-links">    
			<ul>      
				<?php if (get_theme_mod( 'fb_textbox', 'http://facebook.com' )) { ?>      
				<li>        
					<a class="facebook" href="<?php echo get_theme_mod( 'fb_textbox', 'http://facebook.com' ); ?>" target="_blank"></a>     
				</li>     
				<?php } ?>      
				<?php if (get_theme_mod( 'tw_textbox', 'http://twitter.com' )) { ?>     
				<li>        
					<a class="twitter" href="<?php echo get_theme_mod( 'tw_textbox', 'http://twitter.com' ); ?>" target="_blank"></a>     
				</li>     
				<?php } ?>      
				<?php if (get_theme_mod( 'dribbble_textbox', 'http://dribbble.com' )) { ?>      
				<li>        
					<a class="dribbble" href="<?php echo get_theme_mod( 'dribbble_textbox', 'http://dribbble.com' ); ?>" target="_blank"></a>     
				</li>     
				<?php } ?>      
				<?php if (get_theme_mod( 'plusgoogle_textbox', 'http://plus.google.com' )) { ?>           
				<li>        
					<a class="plusgoogle" href="<?php echo get_theme_mod( 'plusgoogle_textbox', 'http://plus.google.com' ); ?>" target="_blank"></a>
				</li>     
				<?php } ?>      
				<?php if (get_theme_mod( 'pinterest_textbox', 'http://pinterest.com' )) { ?>      
				<li>        
					<a class="pinterest" href="<?php echo get_theme_mod( 'pinterest_textbox', 'http://pinterest.com' ); ?>" target="_blank"></a>
				</li>     
				<?php } ?>      
				<?php if (get_theme_mod( 'github_textbox', 'http://github.com' )) { ?>      
				<li>        
					<a class="github" href="<?php echo get_theme_mod( 'github_textbox', 'http://github.com' ); ?>" target="_blank" ></a>
				</li>     
				<?php } ?>      
				<?php if (get_theme_mod( 'tumblr_textbox', 'http://tumblr.com' )) { ?>      
				<li>        
					<a class="tumblr" href="<?php echo get_theme_mod( 'tumblr_textbox', 'http://tumblr.com' ); ?>" target="_blank"></a>     
				</li>     
				<?php } ?>      
				<?php if (get_theme_mod( 'youtube_textbox', 'http://youtube.com' )) { ?>      
				<li>        
					<a class="youtube" href="<?php echo get_theme_mod( 'youtube_textbox', 'http://youtube.com' ); ?>" target="_blank"></a>
				</li>     
				<?php } ?>      
				<?php if (get_theme_mod( 'linkedin_textbox', 'http://linkedin.com' )) { ?>      
				<li>        
					<a class="linkedin" href="<?php echo get_theme_mod( 'linkedin_textbox', 'http://linkedin.com' ); ?>" target="_blank"></a> 
				</li>     
				<?php } ?>    
			</ul> 
		</div><!-- .social-links -->  

		<?php if ( get_header_image() ) : ?>  
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php header_image(); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
			</a>  
		<?php endif; ?>  
		
		<div id="content" class="site-content">

