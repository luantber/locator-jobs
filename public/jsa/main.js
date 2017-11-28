var app =  new Vue({
  el: '#aplicacion',
  data: {
  	login: "modal",
    crear: "modal",
  	user:{
  		email: '',
  		password: '',

  	},
    trabajo:{
      nombre:'',
      ubicación: '',
      descripcion: '',
      trabajador: ''
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
  },

      crear_tra: function(){
        this.crear="modal is-active"
      },
      cerrar_tra: function(){
        this.crear='modal'
      },
      crear_supr: function(){
        $.post("")
      }
  }
})
/*
var crear_tra = new Vue({
  el: '#crear_tra',
  data : {
    crear: "modal",
  },
  methods:{
      crear_tra: function(){
        this.crear="modal is-active"
      },
      cerrar_tra: function(){
        this.crear='modal'
      }
  }
});
*/
