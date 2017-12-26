@extends('template')
@section('body')
 
<div class="container">
	<div class="row mt-2">

			<div class="col-4">
	
				<div class="card">
				  <div class="card-header">
				    Propuesta
				  </div>
				  <div class="card-body">
				    <h4 class="card-title">Soldado de Partes</h4>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				</div>

			</div>
			<div class="col-8">
				<h5>Conversación:</h5>

			
					<form class="form-group row">
						<div class="col-10">
    						<input class="form-control" type="text">
  						</div>

  						<div class="col-1">
							<button type="submit" class="btn btn-primary">Submit</button>
  							
  						</div>
		
					</form>	
		
				<div class="my-2">
					<img src="{{Auth::user()->foto}}" alt="{{Auth::user()->foto}}" class="rounded-circle float-left mx-2 my-2">				
					<div class="card">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
							This is some text within a card body.
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

				<div class="my-2">
					<img src="{{Auth::user()->foto}}" alt="{{Auth::user()->foto}}" class="rounded-circle float-left mx-2 my-2">				
					<div class="card">
						<div class="card-body">
							<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
							This is some text within a card body.
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



			</div>
	</div>
</div>


<button id="btn"></button>

<script type="text/javascript">

$("#btn").click(function(){
	
	$.post("{{asset('mensaje')}}",
    {
        'mensaje': "Donald Duck",
        '_token' : '{{ csrf_token() }}'
    },
    function(data, status){
        console.log("Data: " + data + "\nStatus: " + status);
    });

});
</script>


<script type="text/javascript" src="{{asset('js/contratarMix.js')}}"></script>


@endsection