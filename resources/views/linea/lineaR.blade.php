<span class="text-center">Ordenado por fecha de creación</span>
<ul class="cbp_tmtimeline">
<!-- Esto es lo que vale-->
@for  ($i = 0; $i < sizeof($trabajos); $i++)
  <li>
    <time class="cbp_tmtime"><span>{{$fechas[$i][1]}}</span> <span>{{$fechas[$i][0]}}</span></time>
    <div class="cbp_tmicon cbp_tmicon-phone"></div>
    <div class="cbp_tmlabel">
      <div class="row">
        <div class="col-10">
          <h2>{{$trabajos[$i]->nombre}}</h2>
          <p>{{$trabajos[$i]->descripcion}}</p>
          <span> <b>Costo: &nbsp;</b>{{$contratos[$i]->costo}} </span>
          <p> <b>Usuario :</b>{{$trabajador->contratos[$i]->user->nombre}}  </p>
          <p> <b>Inicio: </b> {{$contratos[$i]->inicio}} </span> <span> <b>&nbsp; Fin: </b>{{$contratos[$i]->fin}} </p>
        </div>
        <div class="col-2">

          <br>
          <a href="{{asset('trabajos/'.$trabajos[$i]->id)}}" ><i class="material-icons">create</i>  &nbsp;</a>
          <a href="{{asset('trabajos/'.$trabajos[$i]->id)}}" target="_blank"><i class="material-icons">exit_to_app</i> </a>
          <br>
          <br>
          <img src="{{$fotos[$i]->miniatura}}" alt="">
          <br><br><br>
          <a href="{{asset('contratos/'.$contratos[$i]->id)}}">
          <button type="button" class="btn btn-light">Conversación</button>
          </a>
          <br>

        </div>
      </div>
    </div>
  </li>
<!-- Esto es lo que vale-->
@endfor
</ul>
