$(document).ready(function() {

  $('#menu').click(function(){

    var x = document.getElementById("menu");
    
    if (x.className === "sidenav") {
      x.className += " responsive";
      $('.side-menu').css("transform","translate(0%)");
      $('.fas.fa-angle-left').removeClass('fa-angle-left').addClass('fa-angle-right');
      $('#overlay').css("display","block");
    } else {
      x.className = "sidenav";
      $('.side-menu').css("transform","translate(-100%)");
      $('.fas.fa-angle-right').removeClass('fa-angle-right').addClass('fa-angle-left');
      $('#overlay').css("display","none");
    }

  });
  
});