

<form  method="post" action="{{asset('trabajos/'.$t->id)}}">
  <input type="hidden" name="_method" value="PUT">
<script type="text/javascript">
$('#myModal').modal({
keyboard: true
})
</script>

<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <h3 style="color:#19608a;">Datos Generales</h3>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="container-fluid mt-2">
                <!--  DATOS GENERALES -->
                <div class="row" >
                	<div class="col-6">

                      {{ csrf_field() }}
        				  <div class="form-group ">
        				    <label style="color:#19608a;">Nombre</label>
                    <input type="text" required name="nombre" id="nombre" class="form-control"  value="{{$t->nombre}}">

        				  </div>

        				  <div class="form-group">
        				    <label style="color:#19608a;">Descripción</label>
        				    <textarea class="form-control" required name="descripcion" rows="3">{{$t->descripcion}}
                    </textarea>
        				  </div>

        					<div class="form-group row">
        							<label  style="color:#19608a;"  for="tagss">Tags:</label>
        							<div class="col-8" id="tagss">
        								@foreach($t->tags as $tag)
        									<a href="#" class="badge badge-pill badge-info">{{$tag->nombre}}</a>
        								@endforeach
        							</div>
        					</div>
                  <div class="form-group ">
                    <label style="color:#19608a;">Dirección</label>
                    <input type="text" required name="direccion" class="form-control"  value="{{$t->direccion}}">

                  </div>
        				  <div class="form-group ">
                    <label style="color:#19608a;"class=" col-form-label">Ingrese un intervalo de costo</label>
                      <div class="row">
                        <div class="col-3">
                          <input class="form-control" required id="inputEmail3"  name="costoMin" placeholder="desde " value="{{$t->costoMin}}">
                        </div>
                        <div class="col-3">
                          <input class="form-control" required id="inputEmail3"  name="costoMax" placeholder="hasta" value="{{$t->costoMax}}">

                        </div>
                      </div>
                  </div>



        				  <br>
        				  <br>

                	</div>

                	<div class="col-6">
                		<label style="color:#19608a;">Ubicación</label>
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

              </div>
            </div>
          </div>

          <label style="color:#19608a;">Galería</label>
          <div class="form-group">



            @foreach ($t->fotos as $f)
            <img width="200" height=""  src="{{$f->url}}" class="img-fluid img-thumbnail">
            @endforeach

          </div>
        </form>

          <button type="submit" class="btn btn-secondary offset-md-5 btn-lg">Guardar	</button>
          <script type="text/javascript">
          $('#myTab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
          });



          </script>
      </div>

    </div>
  </div>
</div>
