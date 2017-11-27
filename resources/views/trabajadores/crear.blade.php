@extends('layouts.app2')

@section('content')
  <div id="crearTrabajadorModal" v-bind:class="trabajador_modal">
    <div class="modal-background"></div>
    <div class="modal-content">
      <div class="box">

    <form method="post" action="/trabajadores" id="formCrearTrabajador">
        <i v-on:click="cerrarLogin" class="fa fa-times is-size-4" style="padding-bottom: 10px" aria-hidden="true"></i>
        {{ csrf_field() }}
        <p>Necesitamos que llenes algunos datos para que puedas publicar un trabajo:</p>
        <br>
        <div class="field">
          <p class="control has-icons-right">
          <div class="field">
            <label class="label">DNI</label>
            <div class="control">
              <input class="input is-medium"  type="text" placeholder="DNI" name="dni">
            </div>
          </div>
          <div class="field">
          <p class="control has-icons-right">
          <div class="field">
            <label class="label">Descripción</label>
            <div class="control">
              <textarea class="textarea is-medium" placeholder="Descripcion" name="descr"></textarea>
            </div>
          </div>

            @if(Auth::check())
              <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            @endif
            <!--
            <span class="icon is-small is-right">
              <i class="fa fa-envelope"></i>
            </span>-->
            <div class="control">
              <input type="submit" class="button is-link" value="Continuar"> 
            </div>
        </div>
    </form>
      </div>
    </div>

  </div>
<script type="text/javascript">
var app =  new Vue({
  el: '#crearTrabajadorModal',
  data: {
    trabajador_modal: "modal is-active",
  },
  methods:{
    window.location.replace("{{asset('/')}}");
    cerrarLogin: function(){
      //this.trabajador_modal = 'modal'
    },
  }
})
</script>
@endsection
