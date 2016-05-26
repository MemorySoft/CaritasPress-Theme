<?php /* Template Name: Publicaciones */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO -->
    
    <div class="row sin-margen--abajo">
      <div class="small-12 columns">
        <h3 class="titulo">Publicacions de Càritas Menorca</h3>
      </div>

      <div class="small-12 columns">
      <?php 
        $publicacion_args = array(
        'post_type' => 'publicacion',
        'posts_per_page'=> 100,
      );
      $wp_query = new WP_Query($publicacion_args);
      if( $wp_query->have_posts() ) { ?>       
        <ul class="coleccion">
          <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <?php $enlace = get_post_meta( get_the_id(), 'publicacion_enlace', true ); ?>
            <li class="coleccion-elemento">
              <span class="titulo"><i class="fa fa-newspaper-o"></i> <?php the_title(); ?></span>
              <a class="coleccion-elemento--secundario" href="<?php echo $enlace ?>" target="_blank">
                <i class="fa fa-download"></i>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php } ?>
    </div>
  </div>

<?php get_footer(); ?>