var timer = $('#requestTime').val();

if(timer !== ""){
    var endTime = $('#requestTime').val();
    var endTime = parseInt(endTime)
    var counterTime = $('#requestTime').val();
    function updateCounter(){
        if(counterTime == 0){
            $('#time').html("0min");
            $('.trip-summary').addClass('flex');
        }else{
            $('#time').html(counterTime + " min");
            counterTime--;
        }
    }
    var time = setInterval(updateCounter, 1000);
    var today = new Date();
    var time = today.getHours() + ":" + (today.getMinutes() + endTime) + ":" + today.getSeconds();
}

var i = 0;
if (i == 0) {
  i = 1;
  var elem = document.getElementById("progress");
  var width = 1;
  var time = $('#requestTime').val();
  var time = (time * 10) + 10;
  var id = setInterval(frame, time);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
      i = 0;
      var t12 = gsap.timeline({defaults:{duration: 0.5, ease: Power1.easeInOut}})
      t12.to(".trip-info.flex", {opacity: 0, scaleX:0.8, scaleY:0.8})
         .from(".trip-summary.flex", {opacity: 0, y: 600}) 
    } else {
      width++;
      elem.style.width = width + "%";
    }
  }
}

//------------------------------------------------------home page animations--//
jQuery(document).ready(function($) {

var os = document.getElementById("origin-summary").innerHTML;

if(os != ""){
  
  var originstr = os.split(' ').slice(0,3).join(' ');
  document.getElementById("origin-summary").innerHTML = originstr;
  
}
  
 var ds = document.getElementById("destination-summary").innerHTML;

if(ds != ""){
  
  var destinationstr = ds.split(' ').slice(0,3).join(' ');
  document.getElementById("destination-summary").innerHTML = destinationstr;
  
}

});

//------------------------------------------------------home page animations--//
jQuery(document).ready(function($) {

  $('#destination-output, #origin-output').click(function(){
       $("#origin").css("display","flex");
       $("#controls").css("display","flex");
       var t7 = gsap.timeline({defaults:{duration: 0.2, ease: Power1.easeOut}})
       t7.to("#output, #vehicles", {opacity: 0, scaleX:0.8, scaleY:0.8})
       var t8 = gsap.timeline({defaults:{duration: 0.2, ease: Power1.easeIn}})
       t8.to("#origin, #controls", {opacity: 1, scaleX:1, scaleY:1, stagger: 0.2}, "+=1")
       $("#output").css("display","none");
       $("#vehicles").css("display","none");
  });

});

