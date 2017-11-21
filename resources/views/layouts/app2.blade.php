<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
		<script src="{{ asset('js/sweetalert.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/fonts-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bulma.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('titulo')</title>

</head>

<body>

  <div id="aplicacion">

<!-- LOGIN -->
  <div class="modal" v-bind:class="login">
    <div class="modal-background"></div>
    <div class="modal-content">
      <div class="box">

        <form method="post" action="login" id="form1">
        <i v-on:click="cerrarLogin" class="fa fa-times is-size-4" style="padding-bottom: 10px" aria-hidden="true"></i>
        {{ csrf_field() }}
        <h1 class="title is-size-4">Inicia sesión para continuar</h1>

        <div class="field">
          <p class="control has-icons-right">
            <input class="input is-medium" v-model="user.email" type="email" placeholder="Email" name="email">

            <span class="icon is-small is-right">
              <i class="fa fa-envelope"></i>
            </span>
          </p>
        </div>

        <div class="field">
          <p class="control has-icons-right">
            <input class="input is-medium" type="password" v-model="user.password" placeholder="Password" name="password">
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
          </nav>log


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

<!--INICIO CREAR_TRABAJO-->
	<div id="crear_tra" >
		<div class="modal" v-bind:class="crear">
		  <div class="modal-background"></div>
		  <div class="modal-card">
		    <header class="modal-card-head">
		      <p class="modal-card-title">Crear Trabajo</p>
		      <button class="delete" aria-label="close" v-on:click="cerrar_tra"></button>
		    </header>
		    <section class="modal-card-body">
		      <!-- Content ... -->
					<div class="box">

						<form method="post" id="form2" action="trabajos">
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
								<input class="input is-medium" type="text" v-model="user.descripcion" placeholder="descripcion" name="descripcion">
								<span class="icon is-small is-right">
									<i class="fa fa-address-card-o"></i>
								</span>
							</p>
						</div>
							<!--<input type="hidden" name="tra_id" v-model="user.trabajador" value="{{Auth::user()->trabajador->id}}">-->
							<input type="hidden" name="tra_id" v-model="user.trabajador" value="1">

					</form>
		    </section>
		    <footer class="modal-card-foot">
		      <button form="form2" class="button is-success" >Crear Trabajo</button>
		      <button class="button" v-on:click="cerrar_tra">Cancelar</button>
		    </footer>
		  </div>
		</div>

	</div>
<!--FIN CREAR_TRABAJO-->

    <nav class="navbar is-light" >
      <div class="navbar-brand ">
        <div class="navbar-item">
            <img src="{{asset('img/logo.png')}}" style="max-height: 2.5rem">
        </div>
        </div>

        <div class="navbar-menu">
          <div class="navbar-start">
            <div class="navbar-item">
              <div class="control has-icons-left">
                <input class="input is-medium" type="text" placeholder="Buscar trabajos">
                <span class="icon is-small is-left">
                  <i class="fa fa-suitcase" aria-hidden="true"></i>
                </span>
              </div>

            </div>
          </div>


          <div class="navbar-end">

            <a class="navbar-item" v-on:click="crear_tra">
              Publicar Trabajo
            </a>

            <a href="" class="navbar-item">
              Registrarse
            </a>



            @if(!Auth::check())
            <div class="navbar-item ">
            <a v-on:click="iniciar" class="navbar-link">
              Iniciar Sesión
            </a>

            <div class="navbar-dropdown">
              <a class="navbar-item">
                Overview
              </a>
            </div>
          </div>
          @else
          <div class="navbar-item has-dropdown is-active">
            <a class="navbar-link">
              {{ Auth::user()->nombre }}
            </a>

            <div class="navbar-dropdown">
              <a class="navbar-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
            </div>
          </div>
          @endif

          </div>
        </div>
    </nav>
  </div>

<script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
<script src="{{asset('jsa/main.js')}}"></script>

    @yield('content')

</body>
</html>
