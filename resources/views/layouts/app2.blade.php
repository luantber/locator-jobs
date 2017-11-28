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
		<div id="login"></div>
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

            <a class="navbar-item" href="/trabajos/create">
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

	<script type="text/javascript">
	var app =  new Vue({
		el: '#aplicacion',
		methods:{
			iniciar: function(){
				console.log("HOO");
				$( "#login" ).load("{{asset('login')}}");
			}
		}
	});
	</script>



    @yield('content')

</body>
</html>
