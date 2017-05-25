jQuery(document).on('click', '.mega-dropdown', function(e) {
  e.stopPropagation()
})

jQuery(window).scroll(function(){
  if (jQuery(this).scrollTop() > 135) {
      //jQuery('#mainMenu').addClass('navfixed');
  } else {
      //jQuery('#mainMenu').removeClass('navfixed');
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

var imageDetail = jQuery("#owl-detailpro");
imageDetail.owlCarousel({
    stopOnHover: true,
    pagination: false,
    navigation: true,
    lazyLoad: true,
    navigationText: [
      "<i class='fa fa-chevron-left'></i>",
      "<i class='fa fa-chevron-right'></i>"
      ],
    items : 5,
    itemsDesktop : [1000,5],
    itemsDesktopSmall : [900,4], 
    itemsTablet: [600,2], 
    itemsMobile : [320,1] 
});


jQuery('.mediaSelected').click(function(){
  jQuery('.item-media').removeClass('active');
  jQuery(jQuery('#mediaItem'+jQuery(this).attr('data-slide-to')).addClass(' active'));
  jQuery('#detailImageModal').modal('show');
  return false;
});
