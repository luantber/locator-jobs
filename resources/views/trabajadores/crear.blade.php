@extends('layouts.app2')

@section('content')
  <div id="crearTrabajadorModal" v-bind:class="trabajador_modal">
    <div class="modal-background"></div>
    <div class="modal-content">
      <div class="box">

    <form method="post" action="/store" id="formCrearTrabajador">
        <i v-on:click="cerrarLogin" class="fa fa-times is-size-4" style="padding-bottom: 10px" aria-hidden="true"></i>
        {{ csrf_field() }}
        <p>Necesitamos que llenes algunos datos para que puedas publicar un trabajo:</p>

        <div class="field">
          <p class="control has-icons-right">
            <input class="input is-medium"  type="text" placeholder="DNI" name="dni">

            <span class="icon is-small is-right">
              <i class="fa fa-envelope"></i>
            </span>
          </p>
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
    cerrarLogin: function(){
      //this.trabajador_modal = 'modal'
      window.location.replace("{{asset('/')}}");
    },
  }
})
</script>
@endsection
