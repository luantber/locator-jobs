@extends('template') 
 
@section('body') 

@if(Auth::check())

	@if(!Auth::user()->trabajador)

		@include('registrarTrabajador')
	@else

 
<div class="container-fluid"> 
 
<div class="row pt-2"> 
 
  <div class="col-2" > 
   
    <div class="list-group">

    @if(!$trabajos->isEmpty())
      <a href="#" class="list-group-item list-group-item-action active"> 
        Trabajo 1 
      </a>       
      <a href="#" class="list-group-item list-group-item-action">Trabajo 2</a> 
      <a href="#" class="list-group-item list-group-item-action">Trabajo 3</a> 
      <a href="#" class="list-group-item list-group-item-action">Trabajo 4</a> 
    @endif
      <a href="#" class="list-group-item list-group-item-action text-primary" id="nuevo"><div class="d-flex">Crear Nuevo <i class="material-icons">add</i></div></a> 
    </div> 
   
  </div> 
 
 
	<div class="col-10" id="contenedor">
		
		<h4 class="d-flex justify-content-center mt-2">Aún no has creado ningún trabajo</h4>
   		<div >
   			<img src="https://cdn.dribbble.com/users/310943/screenshots/2792692/empty-state-illustrations.gif" width="650px" class="rounded mx-auto d-block" alt="Empty State">
   		</div>

	</div> 
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-2 col-form-label">Nombre</label>
				    <div class="col-10">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Trabajo 1">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Descripción</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>

				  <div class="form-group row">
				    <label for="inputEmail3" class="col-2 col-form-label">Costo</label>
				    <div class="col-3">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
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
            title: "Current location!"
            });
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
 
</div> 
 
<script>
	$("#nuevo").click(function(){
		$("#contenedor").load("{{route('trabajos.create')}}"); 
	});
	
</script> 


@endif
@endif

@endsection