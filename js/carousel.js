$('.owl-carousel').owlCarousel({
    center: true,
    items:3,
    autoWidth:true,
    loop:false,
    margin:10,
    responsive:{
        600:{
            items:3
        }
    }
});


  setTimeout(function(){ 
    
  $('.car').on('click', function(event){
    $("#output").css("display","none");
    $("#vehicles").css("display","none");
    var t9 = gsap.timeline({defaults:{duration: 0.5, ease: Power1.easeInOut}})
        t9.to("#output, #vehicles", {opacity: 0, scaleX:0.8, scaleY:0.8})  
          .from(".card-selected", {opacity: 1, y: 600})
          .to(".card-selected", {opacity: 1, y: 0}, "-=0.5")

    $('.card-selected').addClass('flex');  

    setTimeout(function(){ 
      $('#overlay').css("display", "block");
    }, 1000);

  }); 

  }, 1000);

  setTimeout(function(){ 
    
  $('#overlay').click(function(){
    
    $(this).css("display","none"); 
    $("#output").css("display","flex");
    $("#vehicles").css("display","flex");
    var t10 = gsap.timeline({defaults:{duration: 0.5, ease: Power1.easeInOut}})
        t10.to(".card-selected", {opacity: 0, y: 600})
           .to("#output, #vehicles", {opacity: 1, scaleX:1, scaleY:1})  
    
  });
    
  }, 300);