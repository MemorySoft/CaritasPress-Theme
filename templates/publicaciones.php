<?php /* Template Name: Publicaciones */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO -->

<div class="row sin-margen--abajo">
  <div class="small-12 columns">
    <h2 class="titulo">Informes i boletins</h2>
  </div>

  <div class="small-12 columns">
    <?php
      $publicacion_args = array(
      'post_type' => 'publicacion',
    );
    $wp_query = new WP_Query($publicacion_args);
    if( $wp_query->have_posts() ) { ?>
      <ul class="coleccion">
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <?php $publicacion_enlace = get_post_meta( get_the_id(), 'publicacion_enlace', true ); ?>
          <?php $publicacion_fecha = get_post_meta( get_the_id(), 'publicacion_fecha', true ); ?>
          <li class="coleccion-elemento">
            <div class="coleccion-titulo">
              <a href="<?php echo $publicacion_enlace ?>" target="_blank">
                <?php the_title(); ?>
              </a>
            </div>
            <small class="coleccion-fecha"><?php echo $publicacion_fecha ?></small>
            <p class="coleccion-descripcion"><?php echo the_content(); ?></p>
            <a class="coleccion-elemento--secundario boton-flotante--invertido" href="<?php echo $publicacion_enlace ?>" target="_blank">
              <i class="fa fa-download"></i>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php } ?>
  </div>
</div>


<?php get_footer(); ?>
