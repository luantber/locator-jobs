   
  <ul class="nav nav-tabs" id="myTab" role="tablist"> 
    <li class="nav-item"> 
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos Generales</a> 
    </li>     
  </ul> 
 
  <div class="tab-content" id="myTabContent"> 
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> 
      <div class="container-fluid mt-2"> 
        <!--  DATOS GENERALES -->
        <div class="row" >
        	<div class="col-6">
        		<form action="{{asset('trabajos')}}" method="post">
          {{csrf_field()}}
          <input type="hidden" name="location" id="loc"> </input>
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-2 col-form-label">Nombre</label>
				    <div class="col-10">
				      <input  class="form-control" id="inputEmail3" placeholder="Trabajo .. " name="nombre">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Descripción</label>
				    <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea >
				  </div>

				  <div class="form-group row">
				    <label for="inputEmail3" class="col-2 col-form-label">Costo</label>
				    <div class="col-3">
				      <input class="form-control" id="inputEmail3"  name="costo">
				    </div>
				    <label for="inputEmail3" class="col-2 col-form-label">por</label>

				    <div col-s3>
					    <select class="form-control" name="tipo">
					      <option>Hora</option>
					      <option>Jornal</option>
					      <option>Servicio</option>
					    </select>
				    </div>
				  </div>

				  <div class="form-group">
				  	<label>Galería</label>
				  	<br>
				  	<br>
				  	<br>
				  </div>

				  <button type="submit" class="btn btn-primary">Guardar	</button>
				  <br>
				  <br>

				</form>
        	</div>

        	<div class="col-6">
        		<label>Ubicación</label>
        		<div id="map" class="mb-5" style="height: 72%; width: 100%"></div>
        		<script>

            function initMap(){


            if (navigator.geolocation)
            {
                navigator.geolocation.getCurrentPosition(showCurrentLocation);
            }
            else
            {
               alert("Geolocation API not supported.");
            }

            function showCurrentLocation(position)
            {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var coords = new google.maps.LatLng(latitude, longitude);

                var mapOptions = {
                  zoom: 15,
                  center: coords,
                  mapTypeControl: true,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
              };

            //create the map, and place it in the HTML map div
            map = new google.maps.Map(
              document.getElementById("map"), mapOptions
            );

            //place the initial marker
            var marker = new google.maps.Marker({
              position: coords,
              map: map,
              title: "Current location!",
              draggable:true
              });

            google.maps.event.addListener(marker, "dragend", function(event) { 
              var lat = event.latLng.lat(); 
              var lng = event.latLng.lng(); 
              var punto =  lat+","+lng;
              console.log(punto);
              $("#loc").val(punto);
            }); 
            //https://dev.mysql.com/doc/refman/5.7/en/using-spatial-indexes.html

            }

          }
        </script>
			    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoBFga8LNUmtcWwHs4BzlKLB-aJIhqOuc&callback=initMap">
    			</script>

        	</div>
        </div>
			
      </div> 
    </div> 
 
   
 
   
  </div> 


  <script type="text/javascript"> 

  $('#myTab a').on('click', function (e) { 
    e.preventDefault() 
    $(this).tab('show') 
  }); 

  

  </script>