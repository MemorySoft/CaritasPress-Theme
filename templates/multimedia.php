<?php /* Template Name: Multimedia */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO -->
    
    <div class="row sin-margen--abajo">
      <div class="small-12 columns">
        <h3 class="titulo">Multimedia</h3>
      </div>
    </div>

    <div class="franja fondo-gris--claro">
      <div class="row sin-margen--abajo">
        <h2 class="articulo-titulo texto-mayuscula">Cáritas al Youtube</h2>
        <p class="texto-destacado">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio rerum nesciunt ea maxime, dolore, porro pariatur tempore ad excepturi praesentium quos officiis eaque repudiandae iusto amet earum iure dolorem doloribus consequatur error accusamus. Dolorem, fuga.</p>
        <a href="https://www.youtube.com/channel/UCzcLy0ubLrH_QOmelsHbqcQ" target="_blank" class="large button">Veure el canal de Càritas</a>
      </div>
    </div>

    <div class="row">  
      <?php 
        $audio_args = array(
        'post_type' => 'audio',
        'posts_per_page'=> 100,
      );
      $wp_query = new WP_Query($audio_args);
      if( $wp_query->have_posts() ) { ?>       
        <ul class="coleccion">
          <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
            <?php $enlace = get_post_meta( get_the_id(), 'audio_enlace', true ); ?>
            <li class="coleccion-elemento">
              <span class="titulo"><i class="fa fa-volume-up"></i> <?php the_title(); ?></span>
              <a class="coleccion-elemento--secundario" href="<?php echo $enlace ?>" target="_blank">
                <i class="fa fa-download"></i>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php } ?>
    </div>

<?php get_footer(); ?>