<?php /* Template Name: Proyectos */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO | INTRO -->
    
<div class="row sin-margen--abajo texto-centrado">
  <div class="small-12 columns">
    <h2 class="titulo">Els nostres projectes</h2>
    <!-- <p class="texto-destacado">Es l’estructura administrativa, tècnica i professional que permet desenvolupar programes i serveis específics d’assistència, promoció, formació i sensibilització a les 17 parroquies de Menorca.</p> -->
  </div>
</div>

<!-- CONTENIDO | FILTROS -->

<div class="row">
  <div class="small-12 columns">
    <p class="texto-centrado">Tria un dels teme seguents per filtrar les categories</p>
    <div class="filtros-categorias">
      <div class="menu-centrado">
        <ul class="menu vertical medium-horizontal">
          <li><a class="label" href="projectes">Tot</a></li>
          <li><a class="label" href="<?php echo esc_url( home_url( '/' ) ); ?>animacio-del-voluntariat">Animació del Voluntariat</a></li>
          <li><a class="label" href="<?php echo esc_url( home_url( '/' ) ); ?>accio-social">Acció Social</a></li>
          <li><a class="label" href="<?php echo esc_url( home_url( '/' ) ); ?>ocupacio-i-insercio-laboral">Ocupació i Inserció Laboral</a></li>
          <li><a class="label" href="<?php echo esc_url( home_url( '/' ) ); ?>sensibilitzacio-i-cooperacio">Sensibilització i Cooperació</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- PROYECTOS -->

<div class="row small-up-1 medium-up-2 large-up-3">     
  <?php 
  $args = array(
    'post_type' => 'proyecto',
    'posts_per_page' => 100,
  );
  $proyectos_item = new WP_Query($args);
  if( $proyectos_item->have_posts() ) { ?>
    <?php  while ( $proyectos_item->have_posts() ) : $proyectos_item->the_post(); ?>
      <div class="column" id="post-<?php the_ID(); ?>">
        <div class="articulo stack-for-small texto centrado">
          <div class="articulo-seccion articulo-seccion--vertical">
            <div class="articulo-imagen">
              <a href="javascript:void(0)" title="<?php esc_attr__('Llegir','caritaspress'); ?> <?php the_title(); ?>" data-open="modal-<?php the_ID(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
          </div>
          <div class="articulo-seccion articulo-seccion--vertical">
            <h4 class="articulo-titulo"><?php the_title(); ?></h4>
            <a href="javascript:void(0)" title="<?php esc_attr__('Llegir','caritaspress'); ?> <?php the_title(); ?>" class="button" data-open="modal-<?php the_ID(); ?>"><?php _e('Llegir','caritaspress'); ?></a>
          </div>
        </div>
        <!-- MODAL | PROYECTO -->
        <div class="full reveal" id="modal-<?php the_ID(); ?>" data-reveal>
          <div class="row proyecto">
            <div class="small-12 columns">
              <?php if ( get_theme_mod( 'caritaspress_logo' ) ) : ?>
                <div class='site-logo'>
                  <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                    <img src='<?php echo esc_url( get_theme_mod( 'caritaspress_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                  </a>
                </div>
              <?php endif; ?>
              <h2 class="titulo proyecto-titulo">
                <?php the_title(); ?>
              </h2>
            </div>
            <div class="small-12 medium-6 columns proyecto-lateral">
              <?php the_post_thumbnail(); ?>
              <div class="proyecto-metadatos">
                <?php $terms = get_the_terms( $post->ID , 'programa' ); 
                  foreach ( $terms as $term ) { ?>
                    <span class="label"><?php echo $term->name ?></span>    
                <?php  } ?>
              </div>
            </div>
            <div class="small-12 medium-6 columns proyecto-cuerpo">
              <?php the_content(); ?>
            </div>
            <a href="javascript:void(0)" class="close-button" data-close aria-label="<?php esc_attr__('Tancar','caritaspress'); ?>">&times;</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php } ?>
</div>

<?php get_footer(); ?>