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

$('.car').on('click', function(event){
  $('.card-selected').addClass('flex');
  $('#output').removeClass('flex');
  $('#vehicles').removeClass('flex');
  $('#overlay').css("display", "block");
});