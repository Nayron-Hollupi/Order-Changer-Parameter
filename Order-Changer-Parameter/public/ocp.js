const app = new Vue({
    el: '#app',
    data: {
      name: 'Usuario',
      password: 'senha',

    },
    methods:{
      checkForm: function (e) {
        if (this.name && this.passoword) {
          return true;
        }

      }
    }
  })
