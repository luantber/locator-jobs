@extends("template") @section("body")
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_255,w_1116/v1512778606/trabajo3.jpg"
			 alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_255,w_1116/v1512778689/trabajo2.jpg"
			 alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_255,w_1116/v1512778685/trabajo1.png"
			 alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="  text-black" style="width: 95%; height: auto; background-color:#AEAEAE ;">
			<div class="text-center">
				<br>
				<img src="http://res.cloudinary.com/dkhcofaia/image/upload/w_150,h_150,z_0.9,c_thumb,g_face/tito3_a6npf0.jpg" class="rounded-circle"
				 alt="...">
			</div>
			<div class="card-body">
				<div class="text-center">
					<h4 class="card-title">Nombre</h4>
					<p class="card-text"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci, excepturi. Nobis, saepe? Quibusdam, adipisci? Voluptates
						doloribus neque laudantium placeat cumque quae earum assumenda dolorum, suscipit ea quasi vero aperiam blanditiis!
					</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<br>
		<h4>Nombre del trabajo</h4>
		<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione commodi accusantium ab, cum ullam consequuntur maxime?
			Tempora, error, exercitationem eligendi aliquam mollitia, id fugit recusandae omnis in atque reprehenderit placeat? </p>
	</div>
	<div class="col-sm-4">
		<div class="card m-3 px-4 py-3">
			<div class="card-block">
				<h3 class="card-title">S/.74

					<i class="material-icons" style="font-size:20px;">star_half</i>
					<i class="material-icons" style="font-size:20px;">star_border</i>
					<i class="material-icons" style="font-size:20px;">star_border</i>
					<small style="font-size:17px;">39</small>
				</h3>

				<div class="dropdown-divider"></div>

				<form class="px-4 py-3">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inicio">Desde: </label>
								<input id="inicio" name="inicio" />
							</div>
						</div>

						<div class="col-sm-6">

							<div class="form-group">
								<label for="fin">Fin: </label>
								<input id="fin" name="fin" />
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="huespedes">Huespédes:</label>
								<br>
								<select class="custom-select form-control form-control-sm" id="huepedes">
									<option value="1">1 Huésped</option>
									<option value="2">2 Huésped</option>
									<option value="3">3 Huésped</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary form-control form-control-lg p-2"><b>Reservar</b></button>
							</div>
                <small ><p class="text-center">No se hará ningún cargo ahora</p></small>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>


<script>
	$("#inicio,#fin").datepicker({
     uiLibrary: 'bootstrap4'
  });

</script>

@endsection