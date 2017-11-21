@extends('layouts.app2')

@section('content')
<div class="container">
  <br>
  <section class="hero is-link">
  <div class="columns">
  <div class="column is-2">
    <figure class="image is-128x128">
      <img src="{{asset('img/ernesto.jpg')}}">
    </figure>
  </div>
  <div class="column">
    <br><br><br><br>
    <p class="title is-2">{{$trabajo->nombre}}</p>
  </div>
</div>
<p class="subtitle is-5">{{$trabajo->descripcion}}</p>
</section>

</div>
@endsection
