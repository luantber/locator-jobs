var app =  new Vue({
  el: '#aplicacion',
  data: {
  	login: "modal",
  	user:{
  		email: '',
  		password: '',
  		
  	}
  },
  methods:{
  	iniciar: function(){
  		this.login = 'modal is-active'
  	},
  	cerrarLogin: function(){
  		this.login = 'modal'
  	},
  	logear: function(token){

		$.post( "test.php", { email: this.user.email , password: this.user.password , _token : token } );

  	}
  }
})