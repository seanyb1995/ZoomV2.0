//------------------------------------------------------home page animations--//
jQuery(window).on('load', function() {

  if (top.location.pathname === '/login.php'){
        /* magic ... */
      jQuery(".mobile:after").ready(function() {

        $('.mobile, .logo').addClass('animate');

        $('.logo').delay(4000).animate({top: "60px"});

        $('form').delay(5000).queue(function(){
          $(this).css("opacity", "1");  
        });

        $('.support, .secondary-nav').delay(6000).animate({opacity: "1"});

      });
  }
  
  if (top.location.pathname === '/dashboard.php'){
        /* magic ... */
      jQuery(".mobile:after").ready(function() {

        jQuery('#dashboard').css("opacity", "1");

      });
    
    
  }
  
}); 

