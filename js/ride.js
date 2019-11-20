var timer = $('#requestTime').val();

if(timer !== ""){
    var endTime = $('#requestTime').val();
    var endTime = parseInt(endTime)
    var counterTime = $('#requestTime').val();
    function updateCounter(){
        if(counterTime == 0){
            $('#time').html("0min");
            $('.trip-info').removeClass('flex');
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

var distance = $('#requestDistance').val();

if(distance !== ""){
    var counterDistance = $('#requestDistance').val();
    function updateCounter(){
        if(counterDistance == 0){
            $('#distance').html("0km");
        }else{
            $('#distance').html(counterDistance + "  km");
            counterDistance--;
        }
    }
    
    var interval = ((counterTime / counterDistance) * 1000);
    
    var distance = setInterval(updateCounter, interval);
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