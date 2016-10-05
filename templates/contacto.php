<?php /* Template Name: Contacto */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<div class="contenedor">

	<!-- WIDGETS -->

	<div class="row sin-margen--abajo">
		<div class="small-12 columns">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('contacto-arriba') ) : ?>
			<?php endif; ?>
		</div>
	</div>

	<!-- CONTENIDO -->

    <div class="row sin-margen--abajo">
      <div class="small-12 columns">
        <h3 class="titulo">Contacte</h3>
      </div>
    </div>

    <div class="franja fondo-gris--claro">
      <div class="row sin-margen--abajo">
        <div class="formulario small-12 medium-12 columns" id="formularioContacto">
					<?php echo do_shortcode('[libre-form id="693"]') ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
