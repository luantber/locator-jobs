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




<div class="row container-fluid">
	<div class="col-4 pt-4 px-5"  style="background-color:#AEAEAE ;">
			<div class="row "><img class="mr-3 rounded-circle mx-auto" src="{{$user->foto}}" alt="Generic placeholder image" width="100px" height="100px" ></div>
			<div class="row"><h5 class="pt-2 mx-auto">{{$user->nombre}}</h5></div>
			<div class="row"><p>{{$trabajador->descripcion}}</p></div>
	</div>
	<div class="col-4">
		<br>
		<h4>{{$trabajo->nombre}}</h4>
		<p>{{$trabajo->descripcion}} </p>
	</div>
	<div class="col-4 pr-0">
		<div class="card my-3 px-2 py-3">
			<div class="card-block">
				<div class="d-flex justify-content-between align-items-center px-2">
					<h3 class="card-title">S/.74</h3>

						<div >
							<i class="material-icons" style="font-size:20px;">star_half</i>
							<i class="material-icons" style="font-size:20px;">star_border</i>
							<i class="material-icons" style="font-size:20px;">star_border</i>	
							<i class="material-icons" style="font-size:20px;">star_border</i>	
							<i class="material-icons" style="font-size:20px;">star_border</i>	
						</div>
						
						<small style="font-size:17px;">39</small>

				</div>
				
					<div class="dropdown-divider"></div>

				<form class="px-4 py-3" method="post" 

				action="{{ asset('contratar') }}">

				{{ csrf_field() }}

				<input type="hidden" name="trabajo" value="{{ $trabajo->id }}">

					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inicio">Desde: </label>
								<input id="inicio" name="inicio" required />
							</div>
						</div>

						<div class="col-sm-6">

							<div class="form-group">
								<label for="fin">Fin: </label>
								<input id="fin" name="fin"  required />
							</div>
						</div>

					</div>

					<!--
					<div class="col-12 my-2">
						<div class="d-flex flex-row justify-content-between">

							<div class="d-flex flex-row"> <div id="cantidadD">15</div> días</div>

							<div class="d-flex flex-row">x S/. <div id="costo">25.00</div> =</div>

							<div class="d-flex flex-row font-weight-bold">S/. <div id="total">450.00</div> </div>
 
							
						</div>

					</div>
					-->
					<!--
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
					-->
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary form-control form-control-lg p-2"><b>Negociar</b></button>
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
	var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
	var inicioP  = $('#inicio').datepicker({
	    uiLibrary: 'bootstrap4',
	    format: 'yyyy-mm-dd',
	    minDate: today,
	    maxDate: function () {
	        return $('#fin').val();
	    },
	    change: function (e) {
            
            if( finP.value() == ""){
            	finP.value(inicioP.value());
	    	}

	    	var d = Math.abs(new Date(finP.value()) - new Date(inicioP.value()));
	    	console.log(d/8.64e+7 + 1);

        },

	});

	var finP = $('#fin').datepicker({
	    uiLibrary: 'bootstrap4',
	    format: 'yyyy-mm-dd',
	    minDate: function () {
	        return $('#inicio').val();
	    },
	    change: function (e) {

	    	var d = Math.abs(new Date(finP.value()) - new Date(inicioP.value()));
	    	console.log(d/8.64e+7 +1 );

        }
	});



</script>

@endsection
