@extends('template')

@section('body')
<div style="background-color:#03A694" >

<div  style="padding: 0.2cm;">
<div class="row">
	<div class="col-1">
		<img src="http://res.cloudinary.com/margarcuae/image/upload/c_scale,w_20/v1512941963/filter2_lvxl9a.png" alt="">
	</div>
	<div class="col">

		<button type="button" class="btn  btn-sm text-black" style="background-color:#FFFFFF;" disabled>Filtro n°1</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-light btn-sm" disabled>Filtro n°2</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-light btn-sm" disabled>Filtro n°4</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-light btn-sm" disabled>Filtro n°5</button>
	</div>
	<div class="col">
		<button type="button" class="btn btn-light btn-sm" >Editar</button>

	</div>
</div>
</div>
</div>


<h2>Buscar: 
	@isset($data)
		{{$data}}
	@endisset
</h2>

<!--AQUÍ CMIENZA EL MAPA -->
<div style="padding: 0.5cm;">

<div class="row">
	<div class="col-5">
		<div class="col" id= "mapPlaceholder"></div>
	</div>

	@foreach($trabajos->chunk(2) as $trab)
	<div class="col">
		@foreach($trab as $t)


		<div class="card" style="width: 16rem; background-color:#e8e8e8; ">
			@if($t->fotos->first())
				<img class="card-img-top" height="140" style="object-fit:cover;" src="{{$t->fotos->first()->url}}" alt="Card image cap">
			@else
				<img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_80,q_100,w_200/v1512781323/tag1.jpg" alt="Card image cap">
			@endif
			<div class="card-body">
				<div class="row">
					<div class="col-4">
						<img class=" rounded-circle perfil"  src="{{$t->trabajador->user->foto}}" alt="Card image cap">
					</div>
					<div class="col">

						<h6><strong> <a class="nlink" href="/trabajos/{{$t->id}}">{{$t->nombre}}</a></strong></h6>
						<p class="card-text">S/.{{$t->costo}}</p>
					</div>
				</div>

				<dd class="text-truncate"><FONT SIZE=3>{{$t->descripcion}}</font></dd>
				<div class="row">
					<div class="col">
						<font size=2 > Estrellas </font>
						<div class="">
							<i class="material-icons">star_half</i>
							<i class="material-icons">star_border</i>
							<i class="material-icons">star_border</i>
						</div>

					</div>
					<div class="col">
						<font size=2 style=""> Calificaciones</font>
						<p class="text-center">12</p>
					</div>
				</div>

			</div>
		</div>
		<br>
		@endforeach
		
	</div>
	@endforeach
	


</div>
</div>


<!--

-->



<script>
	$(document).ready(function(){
			//var map;
			initMap();
		});
		var map;
        function initMap(){
			
        	console.log("here");

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
								@if(isset($origen))
									var coords = new google.maps.LatLng({{$origen}});
									
								@else
									var coords = new google.maps.LatLng(latitude,longitude);
								
								@endif

                var mapOptions = {
	                zoom: 15,
	                center: coords,
	                mapTypeControl: true,
	                mapTypeId: google.maps.MapTypeId.ROADMAP
            	};

            //create the map, and place it in the HTML map div
            map = new google.maps.Map(
            	document.getElementById("mapPlaceholder"), mapOptions
            );
            console.log("here");

			//place the initial marker
			
            var marker = new google.maps.Marker({
	            position: coords,
	            map: map,
	            title: "Current location!"
				});
			
			@if (isset($trabajos))
				@foreach($trabajos as $trabajo)
					var position{{$trabajo->id}}=new google.maps.LatLng({{$trabajo->location}});
					var marker{{$trabajo->id}} = new google.maps.Marker({
						position: position{{$trabajo->id}},
						map: map,
						title: "{{$trabajo->nombre}}"
						});
				@endforeach
			@endif
			}
			
			
			
        }
</script>
<!--
    	<script async defer
	    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoBFga8LNUmtcWwHs4BzlKLB-aJIhqOuc&callback=initMap">
	    </script>-->

<style>
		#mapPlaceholder {
		height: 530px;
		width: 500px;
</style>


@endsection