@if ($bool)
<p>Ordenado por fecha de creación</p>
<ul class="cbp_tmtimeline">
<!-- Esto es lo que vale-->
@for ($i = 0; $i < sizeof($contratos); $i++)
  <li>

    <time class="cbp_tmtime" ><span>{{$fechas[$i][1]}}</span> <span>{{$fechas[$i][0]}}</span></time>
    <div class="cbp_tmicon cbp_tmicon-phone"></div>
    <div class="cbp_tmlabel">
      <div class="row">
        <div class="col-10">
          <h2>{{$contratos[$i]->trabajo->nombre}}</h2>
          <p>{{$contratos[$i]->trabajo->descripcion}}</p>
          <span> <b>Costo:</b>{{$contratos[$i]->costo}} </span>
          <p> <b>Servicio por:</b>{{$contratos[$i]->trabajador->user->nombre}} </p>
          <p> <b>Inicio: </b> {{$contratos[$i]->inicio}} </span> <span> <b>&nbsp; Fin: </b>{{$contratos[$i]->fin}} </p>
        </div>
        <div class="col-2">
          <a href="{{asset('trabajos/'.$contratos[$i]->trabajo->id)}}"><i class="material-icons">create</i>  &nbsp;</a>
          <a href="{{asset('trabajos/'.$contratos[$i]->trabajo->id)}}" target="_blank"><i class="material-icons">exit_to_app</i> </a>
          <br><br>
          <img src="{{$contratos[$i]->trabajo->fotos[0]->miniatura}}"  alt="">
          <br>
          <br>
          <br>
          <a href="{{asset('contratos/'.$contratos[$i]->id)}}">
          <button type="button" class="btn btn-light">Conversación</button>
          </a>
        </div>
      </div>

    </div>
  </li>
  @endfor
<!-- Esto es lo que vale-->
</ul>
@endif
@if(!$bool)

<img src="https://cdn.dribbble.com/users/310943/screenshots/2792692/empty-state-illustrations.gif" width="650px" class="rounded mx-auto d-block" alt="Empty State">
@endif
