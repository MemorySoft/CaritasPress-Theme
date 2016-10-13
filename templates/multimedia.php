<?php /* Template Name: Multimedia */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO -->

<div class="row sin-margen--abajo">
  <div class="small-12 columns">
    <h2 class="titulo">Multimedia</h2>
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
            <span class="coleccion-fecha"><strong><?php echo $audio_fecha ?></strong></span>
            <span class="coleccion-descripcion"><?php echo the_content(); ?></span>
            <a class="coleccion-elemento--secundario boton-flotante--invertido" href="<?php echo $audio_enlace ?>" target="_blank">
              <i class="fa fa-volume-up"></i>
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php } ?>
  </div>
</div>

<!-- YOUTUBE -->

<div class="row sin-margen--abajo">
  <div class="small-12 medium-8 columns show-for-medium">
    <h3 class="titulo texto-mayuscula sin-margen--abajo">
      Cáritas al YouTube
      <br><small>Visita el nostre canal de vídeos</small>
    </h3>
  </div>
  <div class="small-12 medium-4 columns">
    <a href="https://www.youtube.com/channel/UCzcLy0ubLrH_QOmelsHbqcQ" target="_blank" class="expanded large button boton-iconizado"><i class="fa fa-youtube "></i> Càritas Menorca</a>
  </div>
  <hr>
</div>

<?php get_footer(); ?>
