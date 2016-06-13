<?php /* Template Name: Ocupación e Inserción Laboral */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- TITULO -->

<div class="row">
  <div class="small-12 columns texto-centrado">
    <h2 class="pagina-titulo">Programa d'Ocupació i Insercio Laboral</h2>
    <p class="texto-destacado">El Programa d’Inclusió Social és des del qual parteix l'atenció bàsica a les persones més vulnerables de Menorca. Treballem per ajudar a cobrir les necessitats bàsiques, per millorar els processos d'inserció social i fer un acompanyament més humà, que és la part essencial de la nostra línea d'acció social.</p>
    <hr>
  </div>
</div>  

<!-- NOTICIAS -->

<div class="row small-up-1 medium-up-2 large-up-3">   
  <?php 
  $args = array(
    'tax_query' => array(
      array(
        'taxonomy' => 'programa',
        'field' => 'slug',
        'terms' => array( 'ocupacio-i-insercio-laboral' )
      ),
    ),
    'post_type' => 'proyecto',
  );
  $laboral_item = new WP_Query($args);
  if( $laboral_item->have_posts() ) { ?>
    <?php  while ( $laboral_item->have_posts() ) : $laboral_item->the_post(); ?>
      <div class="column" id="post-<?php the_ID(); ?>">
        <div class="articulo stack-for-small texto centrado">
          <div class="articulo-seccion articulo-seccion--vertical espacio">
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
              <h2 class="titulo proyecto-titulo">
                <?php if ( get_theme_mod( 'caritaspress_logo' ) ) : ?>
                  <div class='site-logo'>
                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                      <img src='<?php echo esc_url( get_theme_mod( 'caritaspress_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                    </a>
                  </div>
                <?php endif; ?>
                <?php the_title(); ?>
              </h2>
            </div>
            <div class="small-12 medium-6 columns proyecto-lateral">
              <?php the_post_thumbnail(); ?>
              <div class="proyecto-metadatos">
                <?php $terms = get_the_terms( $post->ID , 'programa' ); 
                  foreach ( $terms as $term ) { ?>
                    <span class="label fondo-gris--medio"><?php echo $term->name ?></span>    
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
<hr>

<!-- PAGINADOR -->

<?php if (previous_posts_link() != '' || next_posts_link() != '' ) { ?>
  <div class="row">
    <div class="small-12 columns">
      <hr>
      <ul class="pagination text-center" role="navigation" aria-label="Pagination">
        <li class="pagination-prev"><?php next_posts_link( 'Noticies recents' ); ?></li>
        <li class="pagination-next"><?php previous_posts_link( 'Noticies antigues' ); ?></li>
      </ul>
    </div>
  </div>
 
<?php } ?>
<?php get_footer(); ?>