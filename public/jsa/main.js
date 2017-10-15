Vue.component('barra-busqueda',{
	data:function(){
		return {
			texto: ""
		};
	},

	template: `
		<input id="busqueda" class="col s6  green lighten-1 valign-wrapper" type="text" v-model="texto">
		</input>
	`
});

Vue.component('barra-navegacion', {
  template: `
    <div class="nav-wrapper row green accent-4">
      <div class="brand-logo" style="padding-left:20px"> LoJobs </div>
      <div class="col s3 offset-s2"> <barra-busqueda> </barra-busqueda> </div>

        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>

    </div> 
  `
});




new Vue({
  el: '#aplicacion',

})