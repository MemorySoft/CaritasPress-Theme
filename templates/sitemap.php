<?php /* Template Name: Sitemap */ ?>
<?php require( trailingslashit( get_template_directory() ). '/includes/opciones/_variables.php'); ?>
<?php get_header(); ?>

<!-- CONTENIDO -->

  <div class="row sin-margen--abajo">
    <div class="small-12 columns">
      <h3 class="titulo">Mapa del web</h3>
    </div>
  </div>
  
  <div class="row">
    <div class="small-12 medium-3 columns">
      <h4>Págines</h4>
      <?php wp_list_pages(); ?>
    </div>
    <div class="small-12 medium-3 columns">
      <h4>Categories</h4>
      <?php wp_list_categories(); ?>
    </div>
    <div class="small-12 medium-6 columns">
      <h4>Articles</h4>
      <?php wp_get_archives('type=postbypost&limit=50'); ?>  
    </div>
  </div>

<?php get_footer(); ?>