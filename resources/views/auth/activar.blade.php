@extends('template')

@section('body')

<br>
<div class="container">

    <h5>Activar cuenta</h5>
    <p>Hola, {{$nombre}}. Tienes que activar tu cuenta para verificar tu identidad</p>
    <form method="post" action='/activar' >
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$id}}">
            <input type="hidden" name="email" value="{{$email}}">
            
            <div class="form-group row">
                <label  class="col-sm-3 col-form-label">Contraseña</label>
                    <div class="col-sm-9">
                      <input type="password"  id="contrasena" name="contrasena"class="form-control" placeholder="Contraseña">
                    </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-3 col-form-label">Contraseña</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="rcontrasena" placeholder="Repita la contraseña">
                    </div>
            </div>

            <div class="col-md-2 offset-md-4">
              <input type="submit" class="btn btn-primary">
            </div>
            <div class="form-group row">
                <span id='message'></span>
            </div>

            
    </form>

    <script>

        $('#contrasena, #rcontrasena').on('keyup', function () {
            if ($('#contrasena').val() == $('#rcontrasena').val()) {
                $('#message').attr('class', 'text-success');
                $('#message').text('Las contraseñas coinciden');
            } else 
            {
            $('#message').attr('class', 'text-danger');
            $('#message').text('Las contraseñas no coinciden');
            }
        });
    </script>
        
</div>

@endsection