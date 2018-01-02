
  <div class="modal fade" id="exampleModal2" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{asset('registro')}}">
            {{ csrf_field() }}
            <div class="form-group row">
              <label  class="col-sm-3 col-form-label">Nombre</label>
              <div class="col-sm-9">
                <input type="text" id="nombre"  name="nombre" class="form-control" placeholder="nombre ">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-3 col-form-label">email</label>
              <div class="col-sm-9">
                <input type="email" id="email" name="email" class="form-control" placeholder="email">
              </div>
            </div>

            <!--
            <div class="form-group row">
              <label  class="col-sm-3 col-form-label">Contraseña</label>
              <div class="col-sm-9">
                <input type="password"  id="contrasena" name="contrasena"class="form-control" placeholder="Contraseña">
              </div>
            </div>
            <div class="form-group row">
              <label  class="col-sm-3 col-form-label">Contraseña</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="Repita // por ahora no disponible">
              </div>
            </div>-->
            <meta name="csrf-token"  id="valor1" content="{{ csrf_token() }}">

            <div class="col-md-2 offset-md-4">
              <button type="submit"   class="btn btn-primary">Registrarme</button>
            </div>
            <p class="text-center"> </p>
              <div class="row">
                <div class="col offset-md-1">
                    <a href="{{asset('login/google/index')}}"><button type="button" class="btn btn-light" >
                      <img class="mr-3" src="http://res.cloudinary.com/margarcuae/image/upload/c_scale,h_15,w_15/v1512939138/google_tvnada.png" alt="Generic placeholder image">
                      Google</button></a>

                </div>
                <div class="col">

                    <a href="{{asset('login/facebook/index')}}">
                    <button type="button" class="btn btn-light">
                      <img class="mr-3" src="http://res.cloudinary.com/margarcuae/image/upload/c_scale,w_15/v1512939142/faceboook2_cogyux.png" alt="Generic placeholder image">
                      Facebbook</button>
                    </a>
                </div>
            </div>
        </form>
      </div>
      </div>
    </div>
  </div>




<script type="text/javascript">
/*
  function registrar(nombre,email,contrasena) {
    var datos  = {
      "nombre":nombre,
      "email":email,
      "contrasena": contrasena,
      'X-CSRF-TOKEN': $('#valor1').val(),
    };
    $.ajax({
        method: "POST",
        url:{{asset('register')}}
//        data: $('#formulario').serialize()
        data: datos,
        success: function () {
//          $("#exampleModal2").html( <h1> FUNCIONO </h1> );
          console.log("funciono");
        }

    });
  }*/
</script>
