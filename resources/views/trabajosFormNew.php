   
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
        		<form action="{{ route('trabajos.store' ) }}" method="post">

				  <div class="form-group row">
				    <label for="inputEmail3" class="col-2 col-form-label">Nombre</label>
				    <div class="col-10">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Trabajo .. " name="nombre">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Descripción</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea name="descripcion">
				  </div>

				  <div class="form-group row">
				    <label for="inputEmail3" class="col-2 col-form-label">Costo</label>
				    <div class="col-3">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="costo">
				    </div>
				    <label for="inputEmail3" class="col-2 col-form-label">por</label>

				    <div col-s3>
					    <select class="form-control">
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
			      var map;
			      function initMap() {
			        map = new google.maps.Map(document.getElementById('map'), {
			          center: {lat: -34.397, lng: 150.644},
			          zoom: 8
			        });
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

  if (navigator.geolocation){
      navigator.geolocation.getCurrentPosition(showCurrentLocation);
  }
  else{
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
    //map = new google.maps.Map(document.getElementById("mapPlaceholder"), mapOptions );

    //place the initial marker
    var marker = new google.maps.Marker({
      position: coords,
      map: map,
      title: "Current location!"
      });
    }

  </script>