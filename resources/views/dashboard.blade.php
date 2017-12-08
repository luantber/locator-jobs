@extends('template') 
 
@section('body') 
 
 
<div class="container-fluid"> 
 
<div class="row pt-2"> 
 
  <div class="col-2" > 
   
    <div class="list-group"> 
      <a href="#" class="list-group-item list-group-item-action active"> 
        Trabajo 1 
      </a>       
      <a href="#" class="list-group-item list-group-item-action">Trabajo 2</a> 
      <a href="#" class="list-group-item list-group-item-action">Trabajo 3</a> 
      <a href="#" class="list-group-item list-group-item-action">Trabajo 4</a> 
      <a href="#" class="list-group-item list-group-item-action disabled">Crear Nuevo</a> 
    </div> 
   
  </div> 
 
 
  <div class="col-10"> 
   
  <ul class="nav nav-tabs" id="myTab" role="tablist"> 
    <li class="nav-item"> 
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos Generales</a> 
    </li> 
 
    <li class="nav-item"> 
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Administrar</a> 
    </li> 
 
     
  </ul> 
 
  <div class="tab-content" id="myTabContent"> 
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> 
      <div class="container-fluid mt-2"> 
        <!--  DATOS GENERALES -->
        <div class="row" >
        	<div class="col-6">
        		<form >

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
				  </div>

				  <button type="submit" class="btn btn-primary">Guardar	</button>
				  
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
 
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">  <div class="container-fluid tp-3"> 
        WIpooooow x2 
      </div> 
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

@endsection