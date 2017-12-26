@extends('template')
@section('body')



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