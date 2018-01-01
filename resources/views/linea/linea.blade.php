
@extends('template')
@section('body')


		<div class="container">

			<header class="clearfix">

				<span style="color:#0f3952;" >Mis trabajos</span>
				<div class="btn-group offset-md-3" role="group" aria-label="First group">
					<button type="button"  id="p"class="btn btn-secondary"> <span>Publicados </span> </button>
					<button type="button" id="r" class="btn btn-secondary"> <span>Realizados </span></button>
					<button type="button" id="c" class="btn btn-secondary"> <span>Contratados </span></button>

				</div>

			</header>

			<div class="main" id="main">

				<span>Selecciona una vista </span>
		</div>

<script type="text/javascript">


$(document).ready(function () {
	$("#main").load('{{asset('publicados')}}');
	$("#r").removeClass("active");
	$("#p").addClass("active");
	$("#c").removeClass("active");
});


$(document).ready(function(){
	$("#p").click(function (event) {
		$("#main").load('{{asset('publicados')}}');
		$("#r").removeClass("active");
		$("#p").addClass("active");
		$("#c").removeClass("active");
	});
});

$(document).ready(function(){
	$("#c").click(function (event) {
		$("#main").load('{{asset('contratados')}}');
		$("#r").removeClass("active");
		$("#p").removeClass("active");
		$("#c").addClass("active");
	});
});
$(document).ready(function(){
	$("#r").click(function (event) {
		$("#main").load('{{asset('realizados')}}');
		$("#p").removeClass("active");
		$("#c").removeClass("active");
		$("#r").addClass("active");

	});
});
</script>

@endsection('body')
