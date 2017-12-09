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
      <img class="d-block w-100" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_265,w_1116/v1512778606/trabajo3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_265,w_1116/v1512778689/trabajo2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_265,w_1116/v1512778685/trabajo1.png" alt="Third slide">
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


<!-- TAGS MAS POPULARES !! !-->
<div class="container-fluid ">

  <h4> <strong> Tags Populares</strong></h4>
  <div class="row">

    <div class="col-3">
      <div class="card style="width: 10rem;" ">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_200,w_200/v1512781326/tag2.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Gasfitería</p>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card style="width: 10rem;" ">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/c_fill,h_200,w_200/v1512781323/tag1_goulbi.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Gasfitería</p>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card style="width: 10rem;" ">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/v1512781326/tag2.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Gasfitería</p>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="card style="width: 10rem;" ">
        <img class="card-img-top" src="http://res.cloudinary.com/margarcuae/image/upload/v1512781326/tag2.jpg" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">Gasfitería</p>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
