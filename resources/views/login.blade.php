@extends('index')

@section('body')

<div class="modal is-active">
	<div class="modal-background"></div>
	<div class="modal-content">
		<div class="box">
			<i class="fa fa-times is-size-4" style="padding-bottom: 10px" aria-hidden="true">X</i>
			<h1 class="title is-size-4">Inicia sesión para continuar</h1>
			<div class="field">
				<p class="control has-icons-right">
					<input class="input is-medium" type="email" placeholder="Email">
					
					<span class="icon is-small is-right">
						<i class="fa fa-envelope"></i>
					</span>
				</p>
			</div>

			<div class="field">
				<p class="control has-icons-right">
					<input class="input is-medium" type="password" placeholder="Password">
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
  				<div class="column is-primary" style="padding: 0.65rem;" >
					<div class="notification is-primary has-text-weight-bold has-text-centered">
						Iniciar Sesión
					</div>
  				</div>
			</div>

			<div class="columns has-text-centered has-text-primary" style="margin-top: -1.5rem;">
				<div class="column">
				¿Olvidaste tu contraseña?	
				</div>
			</div>

			<p>No tienes cuenta ? <a href="">Regístrate</a></p>

		</div>
	</div>
	
</div>


@endsection('body')
