<?php /* 5pJQhrPh3XJCUOiaQCa6 */ ?><?php /*   */ ?>
<?php /* uqjsQSyWVhmOHAEVa1i6 */ ?><!DOCTYPE html>
<html class="no-js" itemscope itemtype="http://schema.org/Article" <?php language_attributes(); ?>>
<head>
  <title><?php wp_title(''); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

	<!-- Iconos -->
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/imagenes/favicon.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/imagenes/favicon.ico">

  <!-- Estilos -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" />

  <!-- Estilos críticos -->
  <style>
    /* Insertar aquí los estilos críticos que se deban cargar al inicio */
  </style>

  <!-- Twitter card -->
  <meta name="twitter:widgets:csp" content="on">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:url" content="<?php bloginfo('url'); ?>">
  <meta name="twitter:title" content="<?php bloginfo('name'); ?>">
  <meta name="twitter:description" content="<?php echo bloginfo( 'description' ); ?>">
  <meta name="twitter:image" content="<?php echo esc_url( get_theme_mod( 'caritaspress_logo' ) ); ?>">

  <!-- Google + -->
  <meta itemprop="name" content="<?php bloginfo('name'); ?>">
  <meta itemprop="description" content="<?php echo bloginfo( 'description' ); ?>">
  <meta itemprop="image" content="<?php echo esc_url( get_theme_mod( 'caritaspress_logo' ) ); ?>">

  <!-- Scripts -->
  <script src="<?php bloginfo('template_directory'); ?>/javascript/vendor/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/javascript/vendor/foundation.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/javascript/vendor/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/javascript/vendor/gridforms.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/javascript/vendor/touchtouch.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/javascript/app.js"></script>

  <!-- Cabeceras insertadas por WordPress -->
  <?php wp_head(); ?>
  <?php include( 'includes/opciones/_variables.php'); ?>
</head>

<body <?php body_class(); ?>>

  <!-- CARALIBRO -->

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- NAVEGACIÓN -->
<nav>
  <div class="row top-bar sin-margen--abajo">
    <div class="small-12 columns">
      <div class="top-bar-title">
        <?php if ( get_theme_mod( 'caritaspress_logo' ) ) : ?>
			    <div class='site-logo'>
			      <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
			      	<img src='<?php echo esc_url( get_theme_mod( 'caritaspress_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
			      </a>
			    </div>
				<?php else : ?>
	    		<strong>
	    			<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
	    				<?php bloginfo( 'name' ); ?>
	    			</a>
	    		</strong>
				<?php endif; ?>
      </div>
      <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
        <span class="menu-disparador">
          MENU
        </span>
      </span>
      <div class="top-bar-right">
        <?php caritaspress_menu_principal(); ?>
      </div>
    </div>
  </div>
</nav>
