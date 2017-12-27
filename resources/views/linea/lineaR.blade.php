<ul class="cbp_tmtimeline">
<!-- Esto es lo que vale-->
@for  ($i = 0; $i < sizeof($trabajos); $i++)
  <li>
    <time class="cbp_tmtime"><span>{{$fechas[$i][0]}}</span> <span>{{$fechas[$i][1]}}</span></time>
    <div class="cbp_tmicon cbp_tmicon-phone"></div>
    <div class="cbp_tmlabel">
      <h2>{{$trabajos[$i]->nombre}}</h2>
      <p>{{$trabajos[$i]->descripcion}}</p>
    </div>
  </li>
<!-- Esto es lo que vale-->
@endfor
</ul>
