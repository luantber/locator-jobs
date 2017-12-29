
<h1>hola {{$t->id}}</h1>
<!--

        <div class="row" >
        	<div class="col-6">
        		<form >
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-2 col-form-label">Nombre</label>
				    <div class="col-10">
				      <input type="text" class="form-control" id="inputEmail3" placeholder="Trabajo 1" value="{{$t->nombre}}">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Descripción</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$t->descripcion}}
            </textarea>
				  </div>
					<div class="form-group row">
							<label for="tagss">Tags:</label>
							<div class="col-8" id="tagss">
								@foreach($t->tags as $tag)
									<a href="#" class="badge badge-pill badge-primary">{{$tag->nombre}}</a>
								@endforeach
							</div>
					</div>
				  <div class="form-group row">
				    <label for="inputEmail3" class="col-2 col-form-label">Costo</label>
				    <div class="col-3">
				      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{$t->costo}}">
				    </div>



				  </div>
          <label>Galería</label>
				  <div class="form-group">

            @foreach ($t->fotos as $f)
            <img width="200" height=""  src="{{$f->url}}" class="img-fluid img-thumbnail">
            @endforeach

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
            var xy = "{{ $t->location }}";

              var coords = new google.maps.LatLng(parseFloat(xy.split(",")[0]), parseFloat(xy.split(",")[1]));
              //var coords = new google.maps.LatLng("{{$t->location}}"));

			        map = new google.maps.Map(document.getElementById('map'), {
			          center: coords,
			          zoom: 15
			        });

              var marker = new google.maps.Marker({
              position: coords,
              map: map,
              title: "{{$t->nombre}}",
              draggable:true
              });



			    </script>

        	</div>
        </div>

      -->
