jQuery(document).on('click', '.mega-dropdown', function(e) {
  e.stopPropagation()
})

jQuery(window).scroll(function(){
    if (jQuery(this).scrollTop() > 135) {
        jQuery('#mainMenu').addClass('navfixed');
    } else {
        jQuery('#mainMenu').removeClass('navfixed');
    }
});

var owlPartner = jQuery("#owl-partner");

owlPartner.owlCarousel({
    items : 7,
    itemsDesktop : [1000,7],
    itemsDesktopSmall : [900,3], 
    itemsTablet: [600,2], 
    itemsMobile : [320,1] 
});

var ownOrient = jQuery("#owl-orient");

ownOrient.owlCarousel({
    slideSpeed: 500,
    paginationSpeed: 400,
    //autoPlay: true,
    stopOnHover: true,
    pagination: false,
    navigation: true,
    lazyLoad: true,
    navigationText: [
      "<i class='fa fa-chevron-left'></i>",
      "<i class='fa fa-chevron-right'></i>"
      ],
    items : 3,
    itemsDesktop : [1000,3],
    itemsDesktopSmall : [900,3], 
    itemsTablet: [600,2], 
    itemsMobile : [320,1] 
});

var ownOlymPianus = jQuery("#owl-olym-painus");
ownOlymPianus.owlCarousel({
    slideSpeed: 500,
    paginationSpeed: 400,
    //autoPlay: true,
    stopOnHover: true,
    pagination: false,
    navigation: true,
    lazyLoad: true,
    navigationText: [
      "<i class='fa fa-chevron-left'></i>",
      "<i class='fa fa-chevron-right'></i>"
      ],
    items : 3,
    itemsDesktop : [1000,3],
    itemsDesktopSmall : [900,3], 
    itemsTablet: [600,2], 
    itemsMobile : [320,1] 
});

var imageProduct = jQuery("#owl-detail");
imageProduct.owlCarousel({
    stopOnHover: true,
    pagination: false,
    navigation: true,
    lazyLoad: true,
    navigationText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>"
    ],
    items : 1
});

jQuery('.mediaSelected').click(function(){
  jQuery('.item-media').removeClass('active');
  jQuery(jQuery('#mediaItem'+jQuery(this).attr('data-slide-to')).addClass(' active'));
  jQuery('#detailImageModal').modal('show');
  return false;
});

jQuery("#dropMenu").hover(function(){
    jQuery('#aRoot, #navRoot').addClass('dropdown-is-active');
},function(){
    jQuery('#aRoot, #navRoot').removeClass('dropdown-is-active');
});

jQuery('#mainMenu li.dropdown').hover(function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
    jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});


jQuery('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop:true,
    slideMargin: 0,
    thumbItem: 5
});

var owlSlider = jQuery("#owl-slider");

owlSlider.owlCarousel({
    items : 1,
    stopOnHover: true,
    pagination: false,
    navigation: false,
    lazyLoad: true,
    slideSpeed: 500,
    autoPlay: true,
    autoPlaySpeed: 3000,    
});

