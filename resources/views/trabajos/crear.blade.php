@extends('layouts.app2')

@section('content')
<div class="container">

<a href="#" id="upload_widget_opener">Upload multiple images</a>

  <script src="//widget.cloudinary.com/global/all.js" type="text/javascript"></script>
  <script type="text/javascript">
    $('#upload_widget_opener').cloudinary_upload_widget(
      { cloud_name: 'margarcuae', upload_preset: 'ejemplo1',
        cropping: 'server', folder: 'user_photos' },
      function(error, result) { console.log(error, result) });
  </script>




  @if(Auth::check())
    @if( null !== Auth::user()->trabajador )





    @else
      @include('trabajadores.crear')
    @endif
  @else
  <h1>DEBES ESTAR LOGUEADO PARA ESTAR AQUI</h1>

  @endif
</div>
@endsection
