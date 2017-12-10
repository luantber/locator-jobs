@extends('template')

@section('body')
<div style="background-color:#03A694" >

<div class="container">
<div class="row">
	<div class="col">
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



<div class="row">
	<div class="col-4">
<div class="col" id= "mapPlaceholder"></div>
	</div>
	<div class="col">

		<div class="card" style="width: 16rem; background-color:#e8e8e8; ">
			<img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_80,q_100,w_200/v1512781323/tag1.jpg" alt="Card image cap">
			<div class="card-body">
				<div class="row">
					<div class="col-4">
						<img class=" rounded-circle"  src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_50,q_100,w_50/v1512781323/tag1.jpg" alt="Card image cap">
					</div>
					<div class="col">

						<h6><strong> Juan Perez</strong></h6>
						<p class="card-text">S/.45.00</p>
					</div>
				</div>

				<FONT SIZE=3>Breve descipción aqui...</font>
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
		<div class="card" style="width: 16rem; background-color:#e8e8e8; ">
			<img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_80,q_100,w_200/v1512781323/tag1.jpg" alt="Card image cap">
			<div class="card-body">
				<div class="row">
					<div class="col-4">
						<img class=" rounded-circle"  src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_50,q_100,w_50/v1512781323/tag1.jpg" alt="Card image cap">
					</div>
					<div class="col">

						<h6><strong> Juan Perez</strong></h6>
						<p class="card-text">S/.45.00</p>
					</div>
				</div>

				<FONT SIZE=3>Breve descipción aqui...</font>
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
	</div>
	<div class="col">

		<div class="card" style="width: 16rem; background-color:#e8e8e8; ">
			<img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_80,q_100,w_200/v1512781323/tag1.jpg" alt="Card image cap">
			<div class="card-body">
				<div class="row">
					<div class="col-4">
						<img class=" rounded-circle"  src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_50,q_100,w_50/v1512781323/tag1.jpg" alt="Card image cap">
					</div>
					<div class="col">

						<h6><strong> Juan Perez</strong></h6>
						<p class="card-text">S/.45.00</p>
					</div>
				</div>

				<FONT SIZE=3>Breve descipción aqui...</font>
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
		<div class="card" style="width: 16rem; background-color:#e8e8e8; ">
			<img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_80,q_100,w_200/v1512781323/tag1.jpg" alt="Card image cap">
			<div class="card-body">
				<div class="row">
					<div class="col-4">
						<img class=" rounded-circle"  src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_50,q_100,w_50/v1512781323/tag1.jpg" alt="Card image cap">
					</div>
					<div class="col">

						<h6><strong> Juan Perez</strong></h6>
						<p class="card-text">S/.45.00</p>
					</div>
				</div>

				<FONT SIZE=3>Breve descipción aqui...</font>
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
	</div>
	<div class="col">

		<div class="card" style="width: 16rem; background-color:#e8e8e8; ">
			<img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_80,q_100,w_200/v1512781323/tag1.jpg" alt="Card image cap">
			<div class="card-body">
				<div class="row">
					<div class="col-4">
						<img class=" rounded-circle"  src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_50,q_100,w_50/v1512781323/tag1.jpg" alt="Card image cap">
					</div>
					<div class="col">

						<h6><strong> Juan Perez</strong></h6>
						<p class="card-text">S/.45.00</p>
					</div>
				</div>

				<FONT SIZE=3>Breve descipción aqui...</font>
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
		<div class="card" style="width: 16rem; background-color:#e8e8e8; ">
			<img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_80,q_100,w_200/v1512781323/tag1.jpg" alt="Card image cap">
			<div class="card-body">
				<div class="row">
					<div class="col-4">
						<img class=" rounded-circle"  src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_50,q_100,w_50/v1512781323/tag1.jpg" alt="Card image cap">
					</div>
					<div class="col">

						<h6><strong> Juan Perez</strong></h6>
						<p class="card-text">S/.45.00</p>
					</div>
				</div>

				<FONT SIZE=3>Breve descipción aqui...</font>
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
	</div>


</div>

<!--

-->


        <script src="http://maps.google.com/maps/api/js?sensor=false">
        </script>
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
            document.getElementById("mapPlaceholder"), mapOptions
            );

            //place the initial marker
            var marker = new google.maps.Marker({
            position: coords,
            map: map,
            title: "Current location!"
            });
            }
        </script>

    <style> #mapPlaceholder {
        height: 530px;
        width: 500px;
				</style>


@endsection
