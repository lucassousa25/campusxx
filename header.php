<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package campusxx
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	

	<?php wp_head(); ?>
	
		<script>
		function zoomMenos() {
			$("p").css({"font-size":"100%"});
			$(".navbar-text").css({"font-size":"90%"});
		}
		
		function zoomMais() {
			$("p").css({"font-size":"200%"});
			$(".navbar-text").css({"font-size":"180%"});
			
		}
	</script>
	
	<style>
		.navbar-text {
			font-size: 90%;
		}
	</style>
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'campusxx' ); ?></a>

	<header id="masthead" class="site-header">
	
		<?php get_template_part('/template-parts/barra-acessibilidade'); ?> <!-- BARRA DE ACESSIBILIDADE -->
		
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
		<!-- Barra de Navegação -->
		<nav id="site-navigation" class="main-navigation navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
			
				<div id="navbar" class="navbar-collapse collapse">
				<?php
					wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 3,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?>
                </div><!--/.navbar-collapse -->
			
			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'campus-xx' ); ?></button>-->
			</div>
		</nav><!-- #site-navigation -->
		<!-- Fim da barra de navegação -->
	</header><!-- #masthead -->

	<div id="content" class="site-content container">	