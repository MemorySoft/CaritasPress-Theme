$(document).ready(function() {
  
  // FOUNDATION INIT
  $(document).foundation();

  // CARRUSELES
  $(".-carrusel-un-item").owlCarousel({
    autoPlay: true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true,
    pagination : false
  });

  $(".-carrusel-tres-items").owlCarousel({
    autoPlay: true,
    navigation: true,
    navigationText: ["←","→"],
    pagination: false,
    items : 3,
    itemsDesktop : [1200,3],
    itemsDesktopSmall : [400,1]
  });

  $(".-carrusel-cuatro-items").owlCarousel({
    autoPlay: true,
    navigation: true,
    navigationText: ["←","→"],
    pagination: false,
    items : 4,
    itemsDesktop : [1200,3],
    itemsDesktopSmall : [400,1]
  });

  // MENU
  $('.menu-disparador').click(function() {
    $('.top-bar-menu').toggle('fast');
  });

});

