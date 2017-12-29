@extends('template')

@section('scripts')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tag-editor/1.0.20/jquery.tag-editor.min.css" />

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/caret/1.0.0/jquery.caret.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tag-editor/1.0.20/jquery.tag-editor.min.js"></script>

@endsection

@section('body')

@if(Auth::check())

	@if(!Auth::user()->trabajador)

		@include('registrarTrabajador')
	@else


    <script src="{{asset('js/cloud.js')}}"></script>
<div class="container-fluid">

<div class="row pt-2">

  <div class="col-2" >

    <div class="list-group">

    @if(!$trabajos->isEmpty())




    @endif
      <a href="#" class="list-group-item list-group-item-action text-primary" id="nuevo"><div class="d-flex">Crear Nuevo <i class="material-icons">add</i></div></a>
    </div>

  </div>


	<div class="col-10" id="contenedor"></div>

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
