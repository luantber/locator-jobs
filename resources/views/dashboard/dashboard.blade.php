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

      @foreach ($trabajos as $t)
        <a href="#" class="list-group-item list-group-item-action" id="a{{$t->id}}" onclick="abrir({{$t->id}});return false;"> 
        {{$t->nombre}}
        </a>
      @endforeach
      
     
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
 
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoBFga8LNUmtcWwHs4BzlKLB-aJIhqOuc&callback=cargo">
</script>


<script>

var trabajos = [ 

@foreach ($trabajos as $t) 
  
  {{$t->id}},

@endforeach

];

function cargo(){

	$("#nuevo").click(function(){
		$("#contenedor").load("{{route('trabajos.create')}}"); 
	});

}

  function abrir(id){
    $("#contenedor").load("{{asset('trabajo')}}"+"/"+id);
    $("#a"+id).addClass("active");

    for (var i = 0; i < trabajos.length; i++) {
      if( trabajos[i] != id ){
          $("#a"+trabajos[i]).removeClass("active");
      }
    }

  }
  
  if(trabajos.length!=0) abrir(trabajos[0]);
	
</script> 



@endif
@endif

@endsection