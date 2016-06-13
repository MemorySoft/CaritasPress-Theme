<?php /* Template Name: Memorias */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO -->
    
<div class="row sin-margen--abajo">
  <div class="small-12 columns">
    <h3 class="titulo">Memòries anuals</h3>
  </div>

  <?php 
      $memoria_args = array(
      'post_type' => 'memoria',
      'posts_per_page'=> 100,
    );
    $wp_query = new WP_Query($memoria_args);
    if( $wp_query->have_posts() ) { ?>
      <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <?php $enlace = get_post_meta( get_the_id(), 'memoria_enlace', true ); ?>
        <div class="small-6 medium-3 columns end">
          <div class="tarjeta">
            <div class="tarjeta-contenido tarjeta-imagen">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="tarjeta-accion">
              <span class="tarjeta-titulo fondo-rojo"><?php the_title(); ?></span>
              <a href="<?php echo $enlace ?>" target="_blank" title="<?php _e('Descarrega','caritaspress'); ?> <?php the_title(); ?>"><i class="fa fa-download"></i></a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php } ?>
  
</div>

<?php get_footer(); ?>