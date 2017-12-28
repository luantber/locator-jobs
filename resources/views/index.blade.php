@extends('template')

@section('body')



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_255,w_1116/v1512778606/trabajo3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_255,w_1116/v1512778689/trabajo2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_255,w_1116/v1512778685/trabajo1.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="pt-3" style="background-color:#e8e8e8;">
  <div class="container">
    <h4><strong>Trabajos</strong></h4>
    <p>Estos son nuestros trabajos disponibles</p>

    @foreach($trabajos->chunk(4) as $trabajo)
    <div class="row">
        @foreach($trabajo as $t)
        <div class="col-3">
    
          <div class="card" style="width: 16rem; background-color:#e8e8e8; ">
            @if($t->fotos->first())
              <img class="card-img-top" height="100px" style="object-fit:cover;" src="{{$t->fotos->first()->url}}" alt="Card image cap">
            @else
              <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_80,q_100,w_200/v1512781323/tag1.jpg" alt="Card image cap">
            @endif

            <div class="card-body" style="padding: 10px;">
              
              <div class="row">
                <div class="col">
                  <img class="rounded-circle perfil"  src="{{$t->trabajador->user->foto}}" alt="Card image cap">
                </div>
                <div class="col">
    
                  <h5 class="card-title"><strong> {{$t->nombre}}</strong></h5>
                  <p class="card-text">S./{{$t->costo}}</p>
                </div>
              </div>
              <br>
              <dd class="text-truncate" maxlength="5"><FONT SIZE=3>{{$t->descripcion}}</font></dd>
              <div class="row">
                <div class="col">
                  <font size=2 > Estrellas </font>
                  <div class="">
                    <i class="material-icons">star_half</i>
                    <i class="material-icons">star_border</i>
                    <i class="material-icons">star_border</i>
                  </div>
    
                </div>
                <div class="col">
                  <font size=2 style=""> Calificaciones</font>
                  <p class="text-center">12</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        @endforeach
    </div>
    <br>
    @endforeach
    {{$trabajos->links()}}
  </div>  
  <br>
</div>

<script>
  $("ul.pagination>li").addClass("page-item");
  $("ul.pagination>li>a").addClass("page-link");
  $("ul.pagination>li>span").addClass("page-link");

</script>


<!-- TAGS MAS POPULARES !! !-->
<div class="container pt-3" >

  <h4> <strong> Tags Populares</strong></h4>
  <p>Descubre los sitios mas solicitados de la semana </p>
  <div class="row">

    <style type="text/css">
      .card-img-top{
        box-shadow: 5px 3px 8px #BCB7EB;
      }

      .card{
       box-shadow: 5px 3px 8px #BCB7EB; 
      }
    </style>

    <div class="col">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781323/tag1.jpg" alt="Card image cap">
        <p class=" text-center">Gasfitería</p>
    </div>
    <div class="col">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_scale,h_150,q_100,w_249/v1512781333/tag3.jpg" alt="Card image cap">
        <p class="text-center">Construcción</p>
    </div>
    <div class="col">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781326/tag2.jpg" alt="Card image cap">
        <p class="text-center">Gasfitería</p>
    </div>
    <div class="col">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781329/mecanica_automotriz_-1024x682_gnnjpv.jpg" alt="Card image cap">
        <p class="text-center">Gasfitería</p>
    </div>
    <div class="col">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781329/mecanica_automotriz_-1024x682_gnnjpv.jpg" alt="Card image cap">
        <p class="text-center">Gasfitería</p>
    </div>
    <div< class="col">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781329/mecanica_automotriz_-1024x682_gnnjpv.jpg" alt="Card image cap">
        <p class="text-center">Gasfitería</p>
    </div>

  </div>
</div>
  <!--CIUDADES ! -->
  <div class="pt-2" style="background-color:#e8e8e8;">
    <div class="container">

    <h4> <strong>Ciudades</strong> </h4>
    <p>Cada ciudad te ofrece algo distinto</p>

      <div class="row" >

        <div class="col">
            <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781323/tag1.jpg" alt="Card image cap">
            <p class="card-text text-center">Gasfitería</p>
        </div>
        <div class="col">
            <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_scale,h_150,q_100,w_249/v1512781333/tag3.jpg" alt="Card image cap">
            <p class="card-text text-center">Construcción</p>
        </div>
        <div class="col">
            <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781326/tag2.jpg" alt="Card image cap">
            <p class="card-text text-center">Gasfitería</p>
        </div>
        <div class="col">
            <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781329/mecanica_automotriz_-1024x682_gnnjpv.jpg" alt="Card image cap">
            <p class="card-text text-center">Gasfitería</p>
        </div>
        <div class="col">
            <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781329/mecanica_automotriz_-1024x682_gnnjpv.jpg" alt="Card image cap">
            <p class="card-text text-center">Gasfitería</p>
        </div>

      </div>
  </div>
<br>

  </div>

  <!--NUESTROS EXPERTOS ! -->
<div class="container pt-2">
  <h4> <strong> Nuestros Expertos </strong></h4>
  <p>Te recomendamos a nuestros profesionales</p>

  <div class="row">

    <div class="col-3">

      <div class="card" style="width: 16rem; background-color:#e8e8e8; ">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781323/tag1.jpg" alt="Card image cap">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <img class=" rounded-circle"  src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_100,q_100,w_100/v1512781323/tag1.jpg" alt="Card image cap">
            </div>
            <div class="col">

              <h5 class="card-title"><strong> Juan Perez</strong></h5>
              <p class="card-text">S/.45.00</p>
            </div>
          </div>
          <br>
          <FONT SIZE=3>Breve descipción aqui...</font>
          <div class="row">
            <div class="col">
              <font size=2 > Estrellas </font>
              <div class="">
                <i class="material-icons">star_half</i>
                <i class="material-icons">star_border</i>
                <i class="material-icons">star_border</i>
              </div>

            </div>
            <div class="col">
              <font size=2 style=""> Calificaciones</font>
              <p class="text-center">12</p>
            </div>
          </div>

        </div>
      </div>

    </div>
    <div class="col-3">

      <div class="card" style="width: 16rem; background-color:#e8e8e8; ">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781323/tag1.jpg" alt="Card image cap">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <img class=" rounded-circle"  src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_100,q_100,w_100/v1512781323/tag1.jpg" alt="Card image cap">
            </div>
            <div class="col">
              <h5 class="card-title"><strong> Juan Perez</strong></h5>
              <p class="card-text">S/.45.00</p>
            </div>
          </div>
          <br>
          <FONT SIZE=3>Breve descipción aqui...</font>
          <div class="row">
            <div class="col">
              <font size=2 > Estrellas </font>
              <div class="">
                <i class="material-icons">grade</i>
                <i class="material-icons">grade</i>
                <i class="material-icons">grade</i>
              </div>

            </div>
            <div class="col">
              <font size=2 style=""> Calificaciones</font>
              <p class="text-center">12</p>
            </div>
          </div>

        </div>
      </div>

    </div>
    <div class="col-3">

      <div class="card" style="width: 16rem; background-color:#e8e8e8; ">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781323/tag1.jpg" alt="Card image cap">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <img class=" rounded-circle"  src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_100,q_100,w_100/v1512781323/tag1.jpg" alt="Card image cap">
            </div>
            <div class="col">

              <h5 class="card-title"><strong> Juan Perez</strong></h5>
              <p class="card-text">S/.45.00</p>
            </div>
          </div>
          <br>
          <FONT SIZE=3>Breve descipción aqui...</font>
          <div class="row">
            <div class="col">
              <font size=2 > Estrellas </font>
              <div class="">
                <i class="material-icons">grade</i>
                <i class="material-icons">grade</i>
                <i class="material-icons">grade</i>
              </div>

            </div>
            <div class="col">
              <font size=2 style=""> Calificaciones</font>
              <p class="text-center">12</p>
            </div>
          </div>

        </div>
      </div>

    </div>
    <div class="col-3">

      <div class="card" style="width: 16rem; background-color:#e8e8e8; ">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_150,q_100,w_249/v1512781323/tag1.jpg" alt="Card image cap">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <img class=" rounded-circle"  src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_100,q_100,w_100/v1512781323/tag1.jpg" alt="Card image cap">
            </div>
            <div class="col">

              <h5 class="card-title"><strong> Juan Perez</strong></h5>
              <p class="card-text">S/.45.00</p>
            </div>
          </div>
          <br>
          <FONT SIZE=3>Breve descipción aqui...</font>
          <div class="row">
            <div class="col">
              <font size=2 > Estrellas </font>
              <div class="">
                <i class="material-icons">grade</i>
                <i class="material-icons">grade</i>
                <i class="material-icons">grade</i>
              </div>

            </div>
            <div class="col">
              <font size=2 style=""> Calificaciones</font>
              <p class="text-center">12</p>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</div>
<br>
<br>
@endsection
