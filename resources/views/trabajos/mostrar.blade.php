@extends('template')

@section('body')



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<script type="text/javascript">
				var original = "{{$fotos[0]->url}}";
				var split = original.split("d/");
				var rs = split[0]+"d/c_fill,h_255,w_1116/"+split[1];

				console.log(rs);
			</script>
		<img width="1116" height="255" class="d-block w-100" src="{{$fotos[0]->url}}" alt="First slide">
		</div>
		@for ($i = 1; $i < sizeof($fotos); $i++)
		<div class="carousel-item">
			<img width="1116" height="255"class="d-block w-100" src="{{$fotos[$i]->url}}" >
		</div>
		@endfor

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
	<div class="col-sm-4"  style="background-color:#AEAEAE ;">
		<br>
		<br>
			<div class="media">

		  	<img class="mr-3 rounded-circle" src="{{$user->foto}}" alt="Generic placeholder image" >
		  	<div class="media-body">
		    	<h5 class="mt-0">{{$user->nombre}}</h5>
		     {{$trabajador->descripcion}}
		  	</div>
			</div>

	</div>
	<div class="col-sm-4">
		<br>
		<h4>{{$trabajo->nombre}}</h4>
		<p>{{$trabajo->descripcion}} </p>
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

<!--
*/
<script>
	$("#inicio,#fin").datepicker({
     uiLibrary: 'bootstrap4'
  });

</script>
-->
@endsection
