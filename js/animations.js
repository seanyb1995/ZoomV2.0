//------------------------------------------------------home page animations--//
jQuery(document).ready(function($) {
  
  jQuery(".mobile:after").ready(function() {

    if (top.location.pathname === '/'){

      var tl = gsap.timeline({defaults:{duration: 0.5, ease: Power1.easeInOut}})

      tl.from(".mobile", {opacity: 0, y: -100, ease: Bounce.easeInOut})
        .from(".logo", {opacity: 0, y: -50})
        .from(".input", {opacity: 0, scaleX:0.8, scaleY:0.8, stagger: 0.5})
        .from(".login", {opacity: 0, scaleX:0.8, scaleY:0.8})
        .from(".support", {opacity: 0, y: -50} , "-=0.5")
        .from(".secondary-nav", {opacity: 0, y: -50}, "-=0.5")
      
     document.getElementById('sign-up').addEventListener('click', () => {
          console.log('click')
          tl.reversed() ? tl.play() : tl.reverse();
      })
      
     document.getElementsbyClassName('login').addEventListener('click', () => {
          console.log('click')
          tl.reversed() ? tl.play() : tl.reverse();
      })
      
    }
    
    if (top.location.pathname === '/login.php'){

      var t2 = gsap.timeline({defaults:{duration: 0.5, ease: Power1.easeInOut}})

      t2.from(".logo", {opacity: 0, y: -50})
        .from(".input", {opacity: 0, scaleX:0.8, scaleY:0.8, stagger: 0.5})
        .from(".login", {opacity: 0, scaleX:0.8, scaleY:0.8})
        .from(".support", {opacity: 0, y: -50} , "-=0.5")
        .from(".secondary-nav", {opacity: 0, y: -50}, "-=0.5")
      
     document.getElementById('sign-up').addEventListener('click', () => {
          console.log('click')
          t2.reversed() ? t2.play() : t2.reverse();
      })
      
    }
    
    if (top.location.pathname === '/register.php'){

      var t3 = gsap.timeline({defaults:{duration: 0.5, ease: Power1.easeInOut}})

      t3.from(".input", {opacity: 0, scaleX:0.8, scaleY:0.8, stagger: 0.2})
        .from(".register", {opacity: 0, scaleX:0.8, scaleY:0.8})
        .from(".terms", {opacity: 0, y: -50} , "-=0.5")
        .from(".secondary-nav", {opacity: 0, y: -50}, "-=0.5")
      
     document.getElementById('login').addEventListener('click', () => {
          console.log('click')
          t3.reversed() ? t3.play() : t3.reverse();
      })
      
    }
    
   if (top.location.pathname === '/forgot-password.php'){

      var t4 = gsap.timeline({defaults:{duration: 0.5, ease: Power1.easeInOut}})

      t4.from(".input", {opacity: 0, scaleX:0.8, scaleY:0.8})
        .from(".forgotpassword", {opacity: 0, scaleX:0.8, scaleY:0.8})
        .from(".secondary-nav", {opacity: 0, y: -50}, "-=0.5")
     
     document.getElementById('login').addEventListener('click', () => {
          console.log('click')
          t4.reversed() ? t4.play() : t4.reverse();
      })
     
      document.getElementById('sign-up').addEventListener('click', () => {
          console.log('click')
          t4.reversed() ? t4.play() : t4.reverse();
      })
     
    }
    
    
    if (top.location.pathname === '/dashboard.php'){

      var t5 = gsap.timeline({defaults:{duration: 0.5, ease: Power1.easeIn}})

      t5.from(".input", {opacity: 0, scaleX:0.8, scaleY:0.8, stagger: 0.2})
      
    }
    

      var t11 = gsap.timeline({defaults:{duration: 0.5, ease: Power1.easeInOut}})

      t11.from(".trip-info.flex", {opacity: 0, scaleX:0.8, scaleY:0.8})
      
    

  });
  
  $("#firstname").focus(function() {
    $(this).closest(".input").css("transform", "scale(1.1)"); 
  });
  
  $("#firstname").focusout(function() {
    $(this).closest(".input").css("transform", "scale(1)"); 
  });
  
  $("#lastname").focus(function() {
    $(this).closest(".input").css("transform", "scale(1.1)"); 
  });
  
  $("#lastname").focusout(function() {
    $(this).closest(".input").css("transform", "scale(1)"); 
  });
  
  $("#email").focus(function() {
    $(this).closest(".input").css("transform", "scale(1.1)"); 
  });
  
  $("#email").focusout(function() {
    $(this).closest(".input").css("transform", "scale(1)"); 
  });
  
  $("#password").focus(function() {
    $(this).closest(".input").css("transform", "scale(1.1)"); 
  });
  
  $("#password").focusout(function() {
    $(this).closest(".input").css("transform", "scale(1)"); 
  });
  
  $("#password_1").focus(function() {
    $(this).closest(".input").css("transform", "scale(1.1)"); 
  });
  
  $("#password_1").focusout(function() {
    $(this).closest(".input").css("transform", "scale(1)"); 
  });
  
  $("#password_2").focus(function() {
    $(this).closest(".input").css("transform", "scale(1.1)"); 
  });
  
  $("#password_2").focusout(function() {
    $(this).closest(".input").css("transform", "scale(1)"); 
  });
  
  $("#origin-input").focus(function() {
    $(this).closest(".input").css("transform", "scale(1.1)"); 
  });
  
  $("#origin-input").focusout(function() {
    $(this).closest(".input").css("transform", "scale(1)"); 
  });
  
  $("#destination-input").focus(function() {
    $(this).closest(".input").css("transform", "scale(1.1)"); 
  });
  
  $("#destination-input").focusout(function() {
    $(this).closest(".input").css("transform", "scale(1)"); 
  });
  
}); 



  
