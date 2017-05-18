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