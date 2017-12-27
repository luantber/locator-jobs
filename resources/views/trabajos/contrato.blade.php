@extends('template')
@section('body')

<script type="text/javascript" src="{{asset('js/vue.js')}}"></script>

<div class="container-fluid">
	<div class="row mt-2">

			<div class="col-4">
	

				@if( $contrato->trabajo->trabajador->user->id == Auth::id () )

				<div class="card">
				  <div class="card-header">
				    Propuesta Editar
				  </div>
				  <div class="card-body">
				    <h4 class="card-title">{{ $contrato->trabajo->nombre}}</h4>
				    <p class="card-text">{{ $contrato->trabajo->descripcion}}</p>

				    <div class="mt-1 mb-3">
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
							<div class="col-4">Días</div>
							<div class="col-4">Costo</div>
							<div class="col-4">Total</div>
						</div>
						<div class="row">
							<div class="col-4" id="dias">15</div>
							<div class="col-4"><input id="costo" type="number" class="form-control" value="{{$contrato->costo}}"></div>
							<div class="col-4" id="total">120</div>
						</div>



					</div>

				    <p>Los datos se actualizan automáticamente</p>

				  </div>
				</div>

				@else
				<div class="card">
				  <div class="card-header">
				    Propuesta
				  </div>
				  <div class="card-body">
				    <h4 class="card-title">{{ $contrato->trabajo->nombre}}</h4>
				    <p class="card-text">{{ $contrato->trabajo->descripcion}}</p>

				    <div class="mt-1 mb-3">
						<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inicio">Desde: </label>
								<div id="inicio">{{ $contrato->inicio }}</div>
							</div>
						</div>

						<div class="col-sm-6">

							<div class="form-group">
								<label for="fin">Fin: </label>
								<div id="fin">{{ $contrato->fin }}</div>
							</div>
						</div>

						</div>

						<div class="row">
							<div class="col-4">Días</div>
							<div class="col-4">Costo</div>
							<div class="col-4">Total</div>
						</div>
						<div class="row">
							<div class="col-4" id="dias">{{$contrato->dias}}</div>
							<div class="col-4" id="costo">{{$contrato->costo}}</div>
							<div class="col-4" id="total">{{$contrato->total}}</div>
						</div>


					</div>

				    <!-- <a href="#" class="btn btn-primary">Contratar</a> -->

				  </div>
				</div>
				@endif

			</div>
			<div class="col-8">
				<h5>Conversación:</h5>

			
					<form id="f1" class="form-group row"> 
						<div class="col-10">
    						<input id="mensaje" class="form-control" type="text" autocomplete="off">
  						</div>

  						<div class="col-1">
							<button id="enviar" type="button" class="btn btn-primary">Submit</button>
  							
  						</div>
		
					</form>	

					<script>

					$('#f1').keypress(function (e) {
					  if (e.which == 13) {
				

					    $.post( "{{asset('mensaje')}}", { 
							mensaje: $("#mensaje").val(), 
							contrato: '{{$contrato->id}}',
							_token: '{{csrf_token()}}'
							});

						$("#mensaje").val("");
						$("#mensaje" ).focus();
					  return false; 

					  }
					});

					$("#enviar").click(function(){
						$.post( "{{asset('mensaje')}}", { 
							mensaje: $("#mensaje").val(), 
							contrato: '{{$contrato->id}}',
							_token: '{{csrf_token()}}'
							});

						$("#mensaje").val("");
						$("#mensaje" ).focus();
					});
					</script>

					<div id="app">
						<mensaje					      
					      v-for="(m, index) in mensajes"
					      v-bind:key="m.id"
					      v-bind:mensaje="m.mensaje"
					      v-bind:id_de = "m.de"
					      v-bind:nombre = "m.de_n"
					      v-bind:date = "m.created_at"
					      v-on:remove="mensajes.splice(index, 1)"
					    ></mensaje>
					</div>

					<script type="text/javascript">
									
							Vue.component('mensaje', {
							  template: `

							  	<div class="my-2">
							  		
									<img v-if="id_de == {{Auth::id()}} " src="{{Auth::user()->foto}}" alt="{{Auth::user()->foto}}" class="rounded-circle float-left mx-2 my-2" width="60px" heigth="60px"/>

									<img v-else src="{{Auth::user()->foto}}" alt="{{Auth::user()->foto}}" class="rounded-circle float-right mx-2 my-2" width="60px" heigth="60px"/>	

									<div class="card">
										<div class="card-body">
											<h6 class="card-subtitle mb-2 text-muted">@{{nombre}} at @{{date}}</h6>
											<div>@{{mensaje}}</div>
										</div>
									</div>
								</div>
							  `,
							props : ['mensaje', 'id_de' , 'nombre' , 'date']
							}

							)

							// create a root instance
							var app = new Vue({
							  el: '#app',
							  data: {
							    mensajes:[],
							    id: {{Auth::id()}}							    
							  },
							  mounted: function () {

							    $.post( "{{asset('getmensajes')}}", { 
									contrato: '{{$contrato->id}}',
									_token: '{{csrf_token()}}'
									}, function (data){
										console.log(data);
										data.map(function(x) {
										   app.mensajes.unshift(x);
										});
									}
							 	);
							  }
							  
							  

							});

					</script>
		
			<!--
				
				<div class="my-2">
					<img src="{{Auth::user()->foto}}" alt="{{Auth::user()->foto}}" class="rounded-circle float-left mx-2 my-2"/>				
					<div class="card">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
							<div>This is some text within a card body.</div>
						</div>
					</div>
				</div>

				<div class="my-2">
					<img src="{{Auth::user()->foto}}" alt="{{Auth::user()->foto}}" class="rounded-circle float-right mx-2 my-2">				
					<div class="card">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
							This is some text within a card body.
						</div>
					</div>
				</div>

		-->


				



			</div>
	</div>
</div>

@if( $contrato->trabajo->trabajador->user->id == Auth::id ()  )
<script>

	var inicioP; var finP;

	function update(){
		var d = Math.abs(new Date(finP.value()) - new Date(inicioP.value()));
    	console.log(d/8.64e+7 +1);
    	$('#dias').html(d/8.64e+7 +1 );
    	$('#total').html( (d/8.64e+7 +1 ) * $('#costo').val() );

    	$.post( "{{asset('contrato/update')}}", { 
							inicio: inicioP.value(), 
							fin: finP.value(),
							contrato: '{{$contrato->id}}',
							costo:$('#costo').val(),
							dias: d/8.64e+7 +1,
							total: (d/8.64e+7 +1 ) * $('#costo').val(),
							_token: '{{csrf_token()}}'
							});
	}

	var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
	
	inicioP  = $('#inicio').datepicker({
	    uiLibrary: 'bootstrap4',
	    minDate: today,
	    format: 'yyyy-mm-dd',
	    maxDate: function () {
	        return $('#fin').val();
	    },
	    change: function (e) {
            
            if( finP.value() == ""){
            	finP.value(inicioP.value());
	    	}

	    	update();

        },

	});

	finP = $('#fin').datepicker({
	    uiLibrary: 'bootstrap4',
	     format: 'yyyy-mm-dd',
	    minDate: function () {
	        return $('#inicio').val();
	    },
	    change: function (e) {

	    	
	    	update();
        }
	});

	$('#inicio').val("{{$contrato->inicio}}");
	$('#fin').val("{{$contrato->fin}}");
	
	update();

	$("#costo").keyup(function() {
		update();
	});

	$("#costo").change(function() {
		update();
	});


</script>
@else

 <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('4c5e4c6266995483ae0e', {
      cluster: 'us2',
      encrypted: true
    });

    var channel = pusher.subscribe('contrato');
    channel.bind('App\\Events\\UpdateContrato', function(data) {
      
      $("#inicio").html(data.update.inicio);
      $("#fin").html(data.update.fin);
      $("#dias").html(data.update.dias);
      $("#costo").html(data.update.costo);
      $("#total").html(data.update.total);

      console.log(data.update);
    });
  </script>


@endif
<script type="text/javascript" src="{{asset('js/contratarMix.js')}}"></script>


@endsection


