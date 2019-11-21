// current geolocation
var x = document.getElementById("latlng");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

$(document).ready(function(){
    getLocation();
});

function showPosition(position) {
  x.value = "" + position.coords.latitude + ", " + position.coords.longitude;
}

function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}

var map;

function initMap() {
// Create a new StyledMapType object, passing it an array of styles,
// and the name to be displayed on the map type control.
  var styledMapType = new google.maps.StyledMapType(
        [
        {
          elementType: "geometry",
          stylers: [
            {
              "color": "#f5f5f5"
            }
          ]
        },
        {
          elementType: "labels.icon",
          stylers: [
            {
              "visibility": "off"
            }
          ]
        },
        {
          elementType: "labels.text.fill",
          stylers: [
            {
              "color": "#616161"
            }
          ]
        },
        {
          elementType: "labels.text.stroke",
          stylers: [
            {
              "color": "#f5f5f5"
            }
          ]
        },
        {
          featureType: "administrative.land_parcel",
          elementType: "labels.text.fill",
          stylers: [
            {
              "color": "#bdbdbd"
            }
          ]
        },
        {
          featureType: "poi",
          elementType: "geometry",
          stylers: [
            {
              "color": "#eeeeee"
            }
          ]
        },
        {
          featureType: "poi",
          elementType: "labels.text.fill",
          stylers: [
            {
              "color": "#757575"
            }
          ]
        },
        {
          featureType: "poi.park",
          elementType: "geometry",
          stylers: [
            {
              "color": "#e5e5e5"
            }
          ]
        },
        {
          featureType: "poi.park",
          elementType: "labels.text.fill",
          stylers: [
            {
              "color": "#9e9e9e"
            }
          ]
        },
        {
          featureType: "road",
          elementType: "geometry",
          stylers: [
            {
              "color": "#ffffff"
            }
          ]
        },
        {
          featureType: "road.arterial",
          elementType: "labels.text.fill",
          stylers: [
            {
              "color": "#757575"
            }
          ]
        },
        {
          featureType: "road.highway",
          stylers: [
            {
              "color": "#dad9d9"
            }
          ]
        },
        {
          featureType: "road.highway",
          elementType: "geometry",
          stylers: [
            {
              "color": "#dadada"
            }
          ]
        },
        {
          featureType: "road.highway",
          elementType: "labels.text.fill",
          stylers: [
            {
              "color": "#616161"
            }
          ]
        },
        {
          featureType: "road.local",
          elementType: "labels.text.fill",
          stylers: [
            {
              "color": "#9e9e9e"
            }
          ]
        },
        {
          featureType: "transit.line",
          elementType: "geometry",
          stylers: [
            {
              "color": "#e5e5e5"
            }
          ]
        },
        {
          featureType: "transit.station",
          elementType: "geometry",
          stylers: [
            {
              "color": "#eeeeee"
            }
          ]
        },
        {
          featureType: "water",
          elementType: "geometry",
          stylers: [
            {
              "color": "#c9c9c9"
            }
          ]
        },
        {
          featureType: "water",
          elementType: "labels.text.fill",
          stylers: [
            {
              "color": "#9e9e9e"
            }
          ]
        }
      ],
      {name: 'Styled Map'});
  
      map = new google.maps.Map(document.getElementById('map'), {
        mapTypeControl: false,
        center: {lat: -33.8688, lng: 151.2195},
        zoom: 13,
        disableDefaultUI: true,
        mapTypeControlOptions: {
        mapTypeIds: ['roadmap', 'satellite', 'hybrid', 'terrain','styled_map']
    }
        
     
  });
 
  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('styled_map', styledMapType);
  map.setMapTypeId('styled_map');
  
  //   var geocoder = new google.maps.Geocoder;
  var geocoder = new google.maps.Geocoder();
  var infowindow = new google.maps.InfoWindow();
  new AutocompleteDirectionsHandler(map);
  var marker = new google.maps.Marker({
    map: map
  });
  
  document.getElementById('getLocation').addEventListener('click', function() {
    geocodeLatLng(geocoder, map, infowindow);
  });
  
  $("document").ready(function() {
    setTimeout(function() {
        $("#getLocation").trigger('click');
    },10);
  });  
  
}

function geocodeLatLng(geocoder, map, infowindow) {
  var input = document.getElementById('latlng').value;
  var latlngStr = input.split(',', 2);
  var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
  geocoder.geocode({'location': latlng}, function(results, status) {
    if (status === 'OK') {
      if (results[0]) {
        document.getElementById("origin-input").value = results[0].formatted_address;
      } else {
        window.alert('No results found');
      }
    } else {
      window.alert('Geocoder failed due to: ' + status);
    }
  });
}
    
  
/**
 * @constructor
 */
function AutocompleteDirectionsHandler(map) {
  this.map = map;
  this.originPlaceId = null;
  this.destinationPlaceId = null;
  this.travelMode = 'DRIVING';
  this.directionsService = new google.maps.DirectionsService();
  this.directionsRenderer = new google.maps.DirectionsRenderer();
  this.directionsRenderer.setMap(map);

  var originInput = document.getElementById('origin-input');
  var destinationInput = document.getElementById('destination-input');

  var originAutocomplete = new google.maps.places.Autocomplete(originInput);
  // Specify just the place data fields that you need.
  originAutocomplete.setFields(['place_id']);

  var destinationAutocomplete = new google.maps.places.Autocomplete(destinationInput);
  // Specify just the place data fields that you need.
  destinationAutocomplete.setFields(['place_id']);

  this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
  this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

}

AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(
    autocomplete, mode) {
  var me = this;
  autocomplete.bindTo('bounds', this.map);

  autocomplete.addListener('place_changed', function() {
    var place = autocomplete.getPlace();

    if (!place.place_id) {
      window.alert('Please select an option from the dropdown list.');
      return;
    }
    if (mode === 'ORIG') {
      me.originPlaceId = place.place_id;
    } else {
      me.destinationPlaceId = place.place_id;
    }
    me.route();
  });
};

AutocompleteDirectionsHandler.prototype.route = function() {
  if (!this.originPlaceId || !this.destinationPlaceId) {
    return;
  }
  var me = this;

  this.directionsService.route(
      {
        origin: {'placeId': this.originPlaceId},
        destination: {'placeId': this.destinationPlaceId},
        travelMode: this.travelMode
      },
      function(response, status) {
        if (status === 'OK') {
          me.directionsRenderer.setDirections(response);
          
          var t5 = gsap.timeline({defaults:{duration: 0.5, ease: Power1.easeInOut}})

          t5.to("#origin, #controls", {opacity: 0, scaleX:0.8, scaleY:0.8, stagger: 0.1})
          
          var infowindow = new google.maps.InfoWindow();

            var marker = new google.maps.Marker({
              position: response.routes[0].legs[0].end_location,
              map: this.map,
              title: 'Test'
            });

          infowindow.setContent(response.routes[0].legs[0].duration.text + " ");
          infowindow.setPosition(response.routes[0].legs[0].end_location);
          infowindow.open(this.map, marker);
          
          
          $("#origin").css("display","none");
          
          $("#controls").css("display","none");
          
          var t6 = gsap.timeline({defaults:{duration: 0.5, ease: Power1.easeInOut}})

          t6.from("#output, #vehicles", {opacity: 0, scaleX:0.8, scaleY:0.8, stagger: 0.5})

          var t7 = gsap.timeline({defaults:{duration: 0.5, ease: Power1.easeInOut}})

          t7.to("#output, #vehicles", {opacity: 1, scaleX:1, scaleY:1, stagger: 0.5},)

          $('#output, #vehicles').addClass('flex');
   
        } else {
          window.alert('Directions request failed due to ' + status);
        }
      });
  
      document.getElementById("origin-output").value = document.getElementById("origin-input").value;
      document.getElementById("destination-output").value = document.getElementById("destination-input").value;
      
      var str1 = document.getElementById("origin-output").value;
  
      var str2 = document.getElementById("destination-output").value;
  
      var pick = str1.split(' ').slice(0,3).join(' ');
  
      var drop = str2.split(' ').slice(0,3).join(' ');
  
      document.getElementById("pick-up").innerHTML = pick;
   
      document.getElementById("drop-off").innerHTML = drop;
 
  
    var bounds = new google.maps.LatLngBounds();

    var markersArray = [];

    var geocoder = new google.maps.Geocoder();

    var originInput = document.getElementById('origin-input').value;

    var destinationInput = document.getElementById('destination-input').value;

    var destinationIcon = 'https://chart.googleapis.com/chart?' +
        'chst=d_map_pin_letter&chld=D|FF0000|000000';
    var originIcon = 'https://chart.googleapis.com/chart?' +
        'chst=d_map_pin_letter&chld=O|FFFF00|000000';

    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
      origins: [originInput],
      destinations: [destinationInput],
      travelMode: 'DRIVING',
      unitSystem: google.maps.UnitSystem.METRIC,
      avoidHighways: false,
      avoidTolls: false
    }, function(response, status) {
      if (status !== 'OK') {
        alert('Error was: ' + status);
      } else {
        var originList = response.originAddresses;
        var destinationList = response.destinationAddresses;
        var outputTime = document.getElementById('time');
        var outputDistance = document.getElementById('distance');
        var outputPrice1 = document.getElementById('price1');
        var outputPrice2 = document.getElementById('price2');
        var outputPrice3 = document.getElementById('price3');
        var outputCost = document.getElementById('cost');
        outputTime.innerHTML = '';
        outputDistance.innerHTML = '';
        outputPrice1.innerHTML = '';
        outputPrice2.innerHTML = '';
        outputPrice3.innerHTML = '';
        outputCost.value = '';

        for (var i = 0; i < originList.length; i++) {
          var results = response.rows[i].elements;
          for (var j = 0; j < results.length; j++) {
            outputTime.innerHTML +=  results[j].duration.text + '<br>';
            outputDistance.innerHTML +=  results[j].distance.text;
            outputPrice1.innerHTML +=  '$' + Math.round((((results[j].distance.value) / 1000) * 1.5));
            outputPrice2.innerHTML +=  '$' + Math.round((((results[j].distance.value) / 1000) * 1.5));
            outputPrice3.innerHTML +=  '$' + Math.round((((results[j].distance.value) / 1000) * 1.5));
            outputCost.value +=  Math.round((((results[j].distance.value) / 1000) * 1.5));
          }
        } 
     
          var requestTime = document.getElementById('time').textContent;
          var Time = requestTime.replace('mins', '');
          Time = parseInt(Time);
          document.getElementById('time').value = Time;
          document.getElementById('requestTime').value = Time;

          var requestDistance = document.getElementById('distance').textContent;
          var Distance = requestDistance.replace('km', '');
          Distance = parseInt(Distance);
          document.getElementById('distance').value = Distance;
          document.getElementById('requestDistance').value = Distance; 
        
          function AddMinutesToDate(date, minutes) {
               return new Date(date.getTime() + minutes*60000);
          }
          function DateFormat(date){
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var ampm = hours >= 12 ? 'pm' : 'am';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            minutes = minutes < 10 ? '0' + minutes : minutes;
            var strTime = hours + ':' + minutes + ' ' + ampm;
            return strTime;
          }
        
          var now = new Date();
          var at = Time + 2;
          var next = AddMinutesToDate(now,at);
          document.getElementById("arrival-time").innerHTML = DateFormat(next);

          document.getElementById("arrival").value = document.getElementById("arrival-time").innerHTML
       
        }
    });
};