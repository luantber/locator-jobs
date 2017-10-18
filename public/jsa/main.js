new Vue({
  el: '#aplicacion',
  data: {
  	login: "modal"
  },
  methods:{
  	iniciar: function(){
  		this.login = 'modal is-active'
  	},
  	cerrarLogin: function(){
  		this.login = 'modal'
  	}
  }
})