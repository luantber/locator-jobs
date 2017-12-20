@extends('template') 
 
@section('body') 

@if(Auth::check())

	@if(!Auth::user()->trabajador)

		@include('registrarTrabajador')
	@else

 
<div class="container-fluid"> 
 
<div class="row pt-2"> 
 
  <div class="col-2" > 
   
    <div class="list-group">

    @if(!$trabajos->isEmpty())
      <a href="#" class="list-group-item list-group-item-action active"> 
        Trabajo 1 
      </a>       
      <a href="#" class="list-group-item list-group-item-action">Trabajo 2</a> 
      <a href="#" class="list-group-item list-group-item-action">Trabajo 3</a> 
      <a href="#" class="list-group-item list-group-item-action">Trabajo 4</a> 
    @endif
      <a href="#" class="list-group-item list-group-item-action text-primary" id="nuevo"><div class="d-flex">Crear Nuevo <i class="material-icons">add</i></div></a> 
    </div> 
   
  </div> 
 
 
	<div class="col-10" id="contenedor">
		
		<h4 class="d-flex justify-content-center mt-2">Aún no has creado ningún trabajo</h4>
   		<div >
   			<img src="https://cdn.dribbble.com/users/310943/screenshots/2792692/empty-state-illustrations.gif" width="650px" class="rounded mx-auto d-block" alt="Empty State">
   		</div>

	</div> 
 
</div> 
 
</div> 
 
<script>
	$("#nuevo").click(function(){
		$("#contenedor").load("{{route('trabajos.create')}}"); 
	});
	
</script> 


@endif
@endif

@endsection