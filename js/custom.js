jQuery(document).ready(function(){
	
	var divs = jQuery('div')
  , nav = jQuery('nav')
  , nav_height = nav.outerHeight();
  
  jQuery(window).on('scroll', function () {
  var cur_pos = jQuery(this).scrollTop() +100;
		
divs.each(function() {
    var top = jQuery(this).offset().top - nav_height,
        bottom = top + jQuery(this).outerHeight();
 
    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find('a').removeClass('active');
      divs.removeClass('active');
 
      jQuery(this).addClass('active');
      nav.find('a[href$="#'+jQuery(this).attr('id')+'"]').addClass('active');
    }
 	});
  
  });

});
  
  