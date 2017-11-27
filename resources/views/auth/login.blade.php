
<!-- LOGIN -->


  <div id="loginModal" v-bind:class="login">
    <div class="modal-background"></div>
    <div class="modal-content">
      <div class="box">

        <form method="post" action="login" id="form1">
        <i v-on:click="cerrarLogin" class="fa fa-times is-size-4" style="padding-bottom: 10px" aria-hidden="true"></i>
        {{ csrf_field() }}
        <h1 class="title is-size-4">Inicia sesión para continuar</h1>

        <div class="field">
          <p class="control has-icons-right">
            <input class="input is-medium"  type="email" placeholder="Email" name="email">

            <span class="icon is-small is-right">
              <i class="fa fa-envelope"></i>
            </span>
          </p>
        </div>

        <div class="field">
          <p class="control has-icons-right">
            <input class="input is-medium" type="password" placeholder="Password" name="password">
            <span class="icon is-small is-right">
              <i class="fa fa-lock"></i>
            </span>
          </p>
        </div>

          <nav class="level">
            <div class="level-left">
            <label class="checkbox">
            <input type="checkbox">
            Recuerdame
            </label>
            </div>
            <div class="level-right">
              <a href="">Mostrar Contraseña</a>
            </div>
          </nav>


          <div class="columns" style="margin-top: -1.5rem;">
            <div class="column">
              <div class="field is-grouped is-grouped-centered">
                <p class="control">
                  <button  form="form1" class="button is-primary has-text-weight-bold has-text-centered" type="submit">
                    Entrar</button>
                  </p>
                </div>
            </div>
        </div>
      </form>

      <div class="columns has-text-centered has-text-primary" style="margin-top: -1.5rem;">
          <div class="column">
          ¿Olvidaste tu contraseña?
          </div>
      </div>

        <div class="columns has-text-centered has-text-primary" style="border-top-style: dotted;">
          <div class="column">
          O ingresa con Google o Facebook<br>
           <a href="{{asset('login/google')}}"><img src="{{asset('img/btnm.png')}}" alt="" width="45%"></a>
          <img src="{{asset('img/btn2m.png')}}" alt="" width="45%">
          </div>
        </div>

          <p>No tienes cuenta ? <a href="">Regístrate</a></p>
      </div>
    </div>

  </div>


  <!--
  FIN LOGIN
  -->

<script type="text/javascript">
var app =  new Vue({
  el: '#loginModal',
  data: {
    login: "modal is-active",
  },
  methods:{
    cerrarLogin: function(){
      this.login = 'modal'
    },
  }
})
</script>
