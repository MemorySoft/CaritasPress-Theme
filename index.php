<?php get_header(); ?>

<!-- TITULO -->

<div class="row sin-margen--abajo">
  <div class="small-12 columns texto-centrado">
      <?php if ( is_category() ) { ?>
        <h2 class="pagina-titulo">Categoria: <?php single_cat_title(); ?></h2>
      <?php } elseif ( is_tag() ) { ?>
        <h2 class="pagina-titulo">Etiqueta: <?php single_tag_title(); ?></h2>
      <?php } elseif ( is_day() ) { ?>
        <h2 class="pagina-titulo"><?php the_time('j \d\e\ F \d\e\ Y'); ?></h2>
      <?php } elseif ( is_month() ) { ?>
        <h2 class="pagina-titulo"><?php the_time('F \d\e\ Y'); ?></h2>
      <?php } elseif ( is_year() ) { ?>
        <h2 class="pagina-titulo"><?php the_time('Y'); ?></h2>
      <?php } elseif ( is_author() ) { ?>
        <h2 class="pagina-titulo">Articles de <?php get_the_author();?></h2>
      <?php } elseif ( isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2 class="pagina-titulo">Artxiu de <?php bloginfo( 'name' ); ?></h2>
        </div>
      </div>
      <?php } else { ?>
        <h2 class="sin-margen--abajo">Actualitat i noticies de Càritas Menorca</h2>
        <p class="texto-destacado show-for-medium">Últimes notícies publicades</p>
      <?php } ?>
  </div>
</div>

<hr>

<!-- FILTROS -->

<div class="row sin-margen--abajo">
  <div class="small-12 medium-6 columns show-for-medium">
    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
      <div class="input-group">
        <input class="input-group-field" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <div class="input-group-button">
          <input class="button" type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
        </div>
      </div>
    </form>
  </div>
  <div class="formulario-navegacion">
    <form class="navegacion-noticias" id="formularioNavegacion" action="">
      <div class="small-12 medium-3 columns">
        <?php
        $args = array(
          'show_option_none' => 'Sel·lecciona una categoria',
        ); ?>
        <?php wp_dropdown_categories('show_option_none=Sel·lecciona una categoria'); ?>
        <script type="text/javascript">
          <!--
          var dropdown = document.getElementById("cat");
          function onCatChange() {
            if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
              location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
            }
          }
          dropdown.onchange = onCatChange;
          -->
        </script>
      </div>
      <div class="small-12 medium-3 columns end">
        <?php
        $args = array(
          'taxonomy' => 'post_tag',
          'show_option_none' => 'Sel·lecciona una etiqueta',
        ); ?>
        <?php wp_dropdown_categories( $args ); ?>
        <script type="text/javascript">
          <!--
          var dropdown = document.getElementById("cat");
          function onCatChange() {
            if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
              location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?cat="+dropdown.options[dropdown.selectedIndex].value;
            }
          }
          dropdown.onchange = onCatChange;
          -->
        </script>
      </div>
    </form>
  </div>
</div>

<div class="row sin-margen--abajo espacio">
  <div class="small-12 columns">
    <?php if ( is_search() ) { ?>
      <h4 class="texto-centrado">
        <?php printf( __( 'Resultats de la cerca: %s', 'shape' ), get_search_query()  ); ?>
      </h4>
    <?php } ?>
  </div>
</div>

<!-- NOTICIAS -->

<div class="row small-up-1 medium-up-2 large-up-3">
  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <div class="column">
        <div class="articulo stack-for-small texto centrado">
          <div class="articulo-seccion articulo-seccion--vertical">
            <div class="articulo-imagen">
              <?php the_post_thumbnail(); ?>
            </div>
          </div>
          <div class="articulo-seccion articulo-seccion--vertical">
            <h4 class="articulo-titulo"><?php the_title(); ?></h4>
            <p class="articulo-extracto"><?php echo the_excerpt(); ?></p>
            <a href="<?php echo the_permalink(); ?>" class="button" title="<?php esc_attr__('Llegir','caritaspress'); ?> <?php the_title(); ?>"><?php _e('Llegir mès','caritaspress' ); ?></a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<!-- PAGINADOR -->

<div class="row sin-margen--abajo">
  <div class="small-12 columns">
    <div class="pagination text-center" role="navigation" aria-label="Pagination">
      <span class="pagination-prev">
        <?php previous_posts_link(); ?>
      </span>
      <span class="pagination-next">
        <?php next_posts_link(); ?>
      </span>
    </div>
  </div>
</div>
<hr>
<?php get_footer(); ?>
