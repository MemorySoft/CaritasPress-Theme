<?php /* Template Name: Multimedia */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO -->

<div class="row sin-margen--abajo">
  <div class="small-12 columns">
    <h3 class="titulo">Multimedia</h3>
  </div>
</div>

<!-- YOUTUBE -->

<div class="franja fondo-gris--claro">
  <div class="row sin-margen--abajo">
    <h2 class="articulo-titulo texto-mayuscula">Cáritas al YouTube</h2>
    <p class="texto-destacado">Pots veure tots els videos de Cáritas Menorca al nostre canal al YouTube</p>
    <a href="https://www.youtube.com/channel/UCzcLy0ubLrH_QOmelsHbqcQ" target="_blank" class="large button">Veure el canal de Càritas</a>
  </div>
</div>

<!-- AUDIO -->

<div class="row">
  <div class="small-12 columns">
    <h3 class="titulo">Audios</h3>
  </div>

  <div class="small-12 columns">
    <?php
      $audio_args = array(
      'post_type' => 'audio',
    );
    $wp_query = new WP_Query($audio_args);
    if( $wp_query->have_posts() ) { ?>
      <ul class="coleccion">
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
          <?php $audio_enlace = get_post_meta( get_the_id(), 'audio_enlace', true ); ?>
          <?php $audio_fecha = get_post_meta( get_the_id(), 'audio_fecha', true ); ?>
          <li class="coleccion-elemento">
            <div class="coleccion-titulo">
              <a href="<?php echo $audio_enlace ?>" target="_blank">
                <?php the_title(); ?>
              </a>
            </div>
            <small class="coleccion-fecha"><?php echo $audio_fecha ?></small>
            <p class="coleccion-descripcion"><?php echo the_content(); ?></p>
            <a class="coleccion-elemento--secundario boton-flotante--invertido" href="<?php echo $audio_enlace ?>" target="_blank">
              <i class="fa fa-volume-up"></i>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php } ?>
  </div>
</div>

<hr>

<?php get_footer(); ?>
