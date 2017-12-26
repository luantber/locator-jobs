@extends('template')
@section('body')

<script type="text/javascript" src="{{asset('js/vue.js')}}"></script>

<div class="container">
	<div class="row mt-2">

			<div class="col-4">
	
				<div class="card">
				  <div class="card-header">
				    Propuesta
				  </div>
				  <div class="card-body">
				    <h4 class="card-title">{{ $contrato->trabajo->nombre}}</h4>
				    <p class="card-text">{{ $contrato->trabajo->descripcion}}</p>

				    <div class="mt-1 mb-3">
						<div class="d-flex flex-row justify-content-between">

							<div class="d-flex flex-row"> <div id="cantidadD">15</div> días</div>

							<div class="d-flex flex-row">x S/. <div id="costo">25.00</div> =</div>

							<div class="d-flex flex-row font-weight-bold">S/. <div id="total">450.00</div> </div>
 
							
						</div>

					</div>

				    <a href="#" class="btn btn-primary">Contratar</a>

				  </div>
				</div>

			</div>
			<div class="col-8">
				<h5>Conversación:</h5>

			
					<form class="form-group row">
						<div class="col-10">
    						<input id="mensaje" class="form-control" type="text">
  						</div>

  						<div class="col-1">
							<button id="enviar" type="button" class="btn btn-primary">Submit</button>
  							
  						</div>
		
					</form>	

					<script>
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
					      v-for="(c, index) in mensajes"
					      v-bind:key="c.id"
					      v-bind:mensaje="c.mensaje"
					      v-on:remove="mensajes.splice(index, 1)"
					    ></mensaje>
					</div>

					<script type="text/javascript">
									
							Vue.component('mensaje', {
							  template: `

							  	<div class="my-2">
							  		
									<img v-if="id == {{Auth::id()}} " src="{{Auth::user()->foto}}" alt="{{Auth::user()->foto}}" class="rounded-circle float-left mx-2 my-2"/>

									<img v-else src="{{Auth::user()->foto}}" alt="{{Auth::user()->foto}}" class="rounded-circle float-right mx-2 my-2"/>	

									<div class="card">
										<div class="card-body">
											<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
											<div>@{{mensaje}}</div>
										</div>
									</div>
								</div>
							  `,
							props : ['mensaje', 'id']
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



<script type="text/javascript" src="{{asset('js/contratarMix.js')}}"></script>


@endsection