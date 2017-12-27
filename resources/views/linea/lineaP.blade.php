<span class="text-center">Ordenado por fecha de creación</span>
<ul class="cbp_tmtimeline">
<!-- Esto es lo que vale-->
@for ($i = 0; $i < sizeof($trabajos); $i++)
  <li>

    <time class="cbp_tmtime" ><span>{{$fechas[$i][1]}}</span> <span>{{$fechas[$i][0]}}</span></time>
    <div class="cbp_tmicon cbp_tmicon-phone"></div>
    <div class="cbp_tmlabel">
      <div class="row">
        <div class="col-10">
          <h2>{{$trabajos[$i]->nombre}}</h2>
          <p>{{$trabajos[$i]->descripcion}}</p>
        </div>
        <div class="col-2">
          <a href="{{asset('trabajos/'.$trabajos[$i]->id)}}"><i class="material-icons">create</i>  &nbsp;</a>
          <a href="{{asset('trabajos/'.$trabajos[$i]->id)}}"><i class="material-icons">exit_to_app</i> </a>
          <br>
          <img src="{{$fotos[$i]->miniatura}}"  alt="">
        </div>
      </div>

    </div>
  </li>
  @endfor
<!-- Esto es lo que vale-->
</ul>
