<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var mapOptions = {
                        zoom: 15,
                        center: new google.maps.LatLng({{$origin}})
                    };
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);
              @foreach($items as $item)
                  var marker{{$item->id}} = new google.maps.Marker({
                      position: new google.maps.LatLng({{$item->location}}),
                      map: map,
                      title: "{{$item->title}}"
                  });
              @endforeach
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoBFga8LNUmtcWwHs4BzlKLB-aJIhqOuc&callback=initMap">
    </script>
  </body>
</html>