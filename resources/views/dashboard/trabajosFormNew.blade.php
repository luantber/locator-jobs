


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

          <!-- Datos Ocultos --> 
          <input type="hidden" name="location" id="loc" required> </input>
          <input type="hidden" name="fotos" id="fotosForm" required> </input>

				  <div class="form-group row">
				    <label for="inputEmail3" class="col-2 col-form-label">Nombre</label>
				    <div class="col-10">
				      <input  class="form-control" id="inputEmail3" name="nombre" required>
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

            <button id="galeriaBoton" type="button" class="btn btn-secondary">Subir Fotos</button> 

            <div id="galeriaContainer"></div>

				 
            

          <script type="text/javascript">  
 
            $('#galeriaBoton').cloudinary_upload_widget(
              { 
               cloud_name: 'luisbch9', 
                  upload_preset: 'bsi9wjf9',
                  //multiple: true,
                  // theme: 'white',
                  //folder: 'locator',
                  //inline_container : '#galeriaContainer'
              },
              function(error, result) { 
                console.log("Errorcito: ",error); 
                //console.log("resultado" ,result);

                if(error == null && result.length >= 1){

                  var fotos = new Array();
                  result.map(function(x){
                      fotos.push({url: x.url , miniatura: x.thumbnail_url});
                  });


                   $("#fotosForm").val(JSON.stringify(fotos));
                   console.log(JSON.stringify(fotos));
                   console.log("Subidos")
                }

              });

          </script>


				  </div>

				  <button type="submit" class="btn btn-primary">Guardar	</button>
				  <br>
				  <br>

				</form>
        	</div>

        	<div class="col-6">
        		<label>Ubicación</label>
        		<div id="map" class="mb-5" style="height: 72%; width: 100%"> Cargando . . .</div>
        		<script>

            


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

            $("#loc").val(latitude + "," + longitude);

            google.maps.event.addListener(marker, "dragend", function(event) { 
              var lat = event.latLng.lat(); 
              var lng = event.latLng.lng(); 
              var punto =  lat+","+lng;
              console.log(punto);
              $("#loc").val(punto);
            }); 
            //https://dev.mysql.com/doc/refman/5.7/en/using-spatial-indexes.html

            }

          
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