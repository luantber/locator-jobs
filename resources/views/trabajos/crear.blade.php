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

    <form method="post" id="form2" action="/trabajos">
           {{ csrf_field() }}

           <div class="field">
             <p class="control has-icons-right">
               <input class="input is-medium" v-model="trabajo.nombre" type="text" placeholder="Nombre" name="nombre">

               <span class="icon is-small is-right">
                 <i class="fa fa-user"></i>
               </span>
             </p>
           </div>

           <div class="field">
             <p class="control has-icons-right">
               <input class="input is-medium" type="text" v-model="user.ubicacion" placeholder="ubicacion" name="ubicacion">
               <span class="icon is-small is-right">
                 <i class="fa fa-address-card-o"></i>
               </span>
             </p>
           </div>

           <div class="field">
             <p class="control has-icons-right">
               <textarea class="textarea" name="descripcion" placeholder="Descripción"></textarea>

             </p>
           </div>
             <input type="hidden" name="tra_id" v-model="user.trabajador" value="{{Auth::user()->trabajador->id}}">

             <input type="submit" class="button is-link" name="" value="Publicar Trabajo">
         </form>



    @else
      @include('trabajadores.crear')
    @endif
  @else
  <h1>DEBES ESTAR LOGUEADO PARA ESTAR AQUI</h1>

  @endif
</div>
@endsection
