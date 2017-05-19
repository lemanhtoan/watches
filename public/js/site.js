jQuery(document).on('click', '.mega-dropdown', function(e) {
  e.stopPropagation()
})

jQuery(window).scroll(function(){
  if (jQuery(this).scrollTop() > 135) {
      jQuery('#megaMenu').addClass('navfixed');
  } else {
      jQuery('#megaMenu').removeClass('navfixed');
  }
});

var owl = $("#owl-partner");

owl.owlCarousel({
    items : 7, //10 items above 1000px browser width
    itemsDesktop : [1000,7], //5 items between 1000px and 901px
    itemsDesktopSmall : [900,3], // betweem 900px and 601px
    itemsTablet: [600,2], //2 items between 600 and 0
    itemsMobile : [320,1] // itemsMobile disabled - inherit from itemsTablet option
});

var maxHeight = Math.max.apply(null, $(".pro-image").map(function ()
{
    return $(this).height();
}).get());
$(".pro-image").css(
    'min-height', maxHeight + 'px'
);
