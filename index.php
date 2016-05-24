<?php get_header(); ?>

<!-- TITULO -->

<div class="row">
  <div class="small-12 columns texto-centrado">
      <?php if ( is_category() ) { ?>
        <h2 class="pagina-titulo">Categoría: <?php single_cat_title(); ?></h2>
      <?php } elseif ( is_tag() ) { ?>
        <h2 class="pagina-titulo">Etiqueta: <?php single_tag_title(); ?></h2>
      <?php } elseif ( is_day() ) { ?>
        <h2 class="pagina-titulo"><?php the_time('j \d\e\ F \d\e\ Y'); ?></h2>
      <?php } elseif ( is_month() ) { ?>
        <h2 class="pagina-titulo"><?php the_time('F \d\e\ Y'); ?></h2>
      <?php } elseif ( is_year() ) { ?>
        <h2 class="pagina-titulo"><?php the_time('Y'); ?></h2>
      <?php } elseif ( is_author() ) { ?>
        <h2 class="pagina-titulo">Artículos de <?php get_the_author();?></h2>
      <?php } elseif ( isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2 class="pagina-titulo">Archivo de <?php bloginfo( 'name' ); ?></h2>
        </div>
      </div>  
      <?php } else { ?>
        <h2 class="pagina-titulo">Actualitat i noticies de Càritas Menorca</h2>
  </div>
</div>  

<!-- FILTROS -->

<div class="row">
  <form class="navegacion-noticias" id="formularioNavegacion" action="">
    <div class="small-12 medium-3 columns">
      <select name="formulario-navegacion--categorias" id="formularioNavegaciónCategorias">
        
        <option value="Categoria 1">CATEGORIES</option>
        <option value="Categoria 2">Categoria 2</option>
        <option value="Categoria 3">Categoria 3</option>
        <option value="Categoria 4">Categoria 4</option>
        <option value="Categoria 5">Categoria 5</option>
      </select>
    </div>
    <div class="small-12 medium-3 columns">
      <select name="formulario-navegacion--categorias" id="formularioNavegaciónCategorias">
        
        <option value="Etiqueta 1">ETIQUETES</option>
        <option value="Etiqueta 2">Etiqueta 2</option>
        <option value="Etiqueta 3">Etiqueta 3</option>
        <option value="Etiqueta 4">Etiqueta 4</option>
        <option value="Etiqueta 5">Etiqueta 5</option>
      </select>
    </div>    
    <div class="small-12 medium-6 columns">
      <div class="input-group">
        <input class="input-group-field" type="text" placeholder="CERCAR">
        <div class="input-group-button">
          <button class="button"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </div>
  </form>
</div>

<?php } ?>

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
            <a href="<?php echo the_permalink(); ?>" class="button">Llegir més</a>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<!-- PAGINADOR -->

<?php if (previous_posts_link() != '' && next_posts_link() != '' ) { ?>
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