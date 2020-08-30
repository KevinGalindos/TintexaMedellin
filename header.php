<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TexMake
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
		<head></head>
	<?php if ( wp_is_mobile() ) : ?>
		<header class="headerprincipal">
            <div class="nav-bar">
                <?=the_custom_logo() ?>
				<div class="search-icon">
					<!--i class="fas fa-search"></i-->
					<!--?php echo do_shortcode('[ivory-search id="128" title="Default Search Form"]'); ?-->
					<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
					<div class="boton-border-contact">
						<a href="http://ilovemedellin.com.co/tintexa/contacto/"> 
						<button class="boton-contact">Contáctanos <i class="fas fa-play"></i></button></a>
					</div>
				</div>
                <nav id="site-navigation" class="main-navigation">
					<!--button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">< ?php esc_html_e( 'Primary Menu', 'texmake' ); ?></button-->
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
        </header>
	<?php else : ?>
        <header class="headerprincipal">
            <div class="nav-bar">
                <?=the_custom_logo() ?>
                <nav id="site-navigation" class="main-navigation">
					<!--button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">< ?php esc_html_e( 'Primary Menu', 'texmake' ); ?></button-->
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<div class="search-icon">
					<!--i class="fas fa-search"></i-->
					<!--?php echo do_shortcode('[ivory-search id="128" title="Default Search Form"]'); ?-->
					<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
					<div class="boton-border-contact">
						<a href="http://ilovemedellin.com.co/tintexa/contacto/"> 
						<button class="boton-contact">Contáctanos <i class="fas fa-play"></i></button></a>
					</div>
				</div>
			</div>
        </header>
    <?php endif; ?>
		
