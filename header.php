<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Interview_Test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link href="<?php //echo get_bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php //echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet"> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <?php
            wp_nav_menu( array(
              'theme_location' => 'main-menu',
              'container'       => 'div',
              'container_id'    => 'navbarResponsive',
              'container_class' => 'collapse navbar-collapse',
              'menu_id'        => false,
              'menu_class'      => 'navbar-nav ml-auto',
              'depth'           => 2,
              'fallback_cb'     => 'bs4navwalker::fallback',
              'walker'          => new bs4navwalker()
            ) );
          ?>
      </div>
    </nav>
	</header>
