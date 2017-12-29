

<h3>Datos Generales</h3>
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
				    <textarea name="descripcion" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea >
				  </div>

				  <div class="form-group row">
				    <label for="tags" class="col-2 col-form-label">Tags</label>
				    <div class="col-10">
              <input type="text" required name="tags" id="tags" class="form-control">
				    </div>
				  </div>
          <div class="form-group row">
            <label  class="col-2 col-form-label">Dirección</label>
            <div class="col-10">
              <input  class="form-control" required  name="direccion" required>
            </div>
          </div>
				  <div class="form-group ">
				    <label for="inputEmail3" class=" col-form-label">Ingrese un intervalo de costo</label>
              <div class="row">
                <div class="col-3">
                  <input class="form-control"  required id="inputEmail3"  name="costoMin" placeholder="desde ">
                </div>
                <div class="col-3">
                  <input class="form-control" id="inputEmail3"  required name="costoMax" placeholder="hasta">

                </div>
              </div>
				  </div>


				  <div class="form-group">

            <button id="galeriaBoton" type="button" class="btn btn-secondary">Subir Fotos</button>

            <div id="galeriaContainer">
            </div>




          <script type="text/javascript">

              $("#tags").tagEditor({
                maxTags: 5,
                maxLength:8,
                autocomplete:  {
                  delay: 0, // show suggestions immediately
                  position: { collision: 'flip' }, // automatic menu position up/down
                  source: ['dentista','electronica','construccion','reparacion','asd','zxc','iop']
              },
                placeholder: "Ingresa tus etiquetas"
              });

            $('#galeriaBoton').cloudinary_upload_widget(
              {
               cloud_name: 'luisbch9',
                  upload_preset: 'bsi9wjf9',
                  //multiple: true,
                   theme: 'white',
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
          <div class="row">

            <button type="submit" class="btn btn-secondary">Guardar	</button>
          </div>
				  <br>
				  <br>

				</form>
        	</div>

        	<div class="col-6">

            <div class="form-group row">
            <label  class="col-3 col-form-label">Ubicación</label>
            <div class="col-5">
              <input id="address" type="textbox" class="form-control" placeholder="Ciudad..">
            </div>
            <div class="col-3">
              <button id="submit" type="button"  class="btn btn-secondary"> Buscar ciudad</button>
            </div>
          </div>



        		<div id="map" class="mb-5" style="height: 72%; width: 100%"> Cargando . . .</div>
        		<script>



              var mapOptions = {
                zoom: 15,
                center: pos,
                mapTypeControl: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            //create the map, and place it in the HTML map div
            map = new google.maps.Map(
              document.getElementById("map"), mapOptions
            );

            //place the initial marker
            var marker = new google.maps.Marker({
              position: pos,
              map: map,
              title: "Current location!",
              draggable:true
              });

            $("#loc").val( pos.lat() + "," + pos.lng());

            google.maps.event.addListener(marker, "dragend", function(event) {
              var lat = event.latLng.lat();
              var lng = event.latLng.lng();
              var punto =  lat+","+lng;
              console.log(punto);
              $("#loc").val(punto);
            });
            //https://dev.mysql.com/doc/refman/5.7/en/using-spatial-indexes.html

            var geocoder = new google.maps.Geocoder();

            $('#submit').click( function() {
              geocodeAddress(geocoder, map);
            });


            function geocodeAddress(geocoder, resultsMap) {
              var address = document.getElementById('address').value;
              geocoder.geocode({'address': address}, function(results, status) {
                if (status === 'OK') {
                  resultsMap.setCenter(results[0].geometry.location);
                   marker.setPosition(results[0].geometry.location);

                } else {
                  alert('Geocode was not successful for the following reason: ' + status);
                }
              });
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
