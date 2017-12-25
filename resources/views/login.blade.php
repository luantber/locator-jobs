
<div class="modal fade" id="exampleModal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" >
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Contraseña</label>
            <input type="password" class="form-control" name="" value="">
          </div>
          <div class="col-md-2 offset-md-4">
            <button type="button" class="btn btn-primary">Ingresar</button>
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
                  <button  class="btn btn-light">
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
