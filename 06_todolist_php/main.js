const { createApp } = Vue
createApp({
  data() {
    return {
      title: 'Hello Vue',
      todos: null,
      newTask: '',
      error: ''
    }
  },

  methods: {
    updateTasks() {
      // super simple version
      /*  console.log(this.newTask.length);
       if(this.newTask.length < 3) {
         this.error = 'Your task has not enogh characters min: 3'
       } else {
         this.todos.unshift(this.newTask)      
       } */

      const data = {
        'newTask': this.newTask
      }

      console.log(data);

      axios
        .post('server.php', data, {
          headers: { 'Content-Type': 'multipart/form-data' }
        })
        .then(response => {
          /* Respose from server.php to our POST request!! */
          console.log(response)
          this.todos = response.data
          this.newTask = ''
        })


    }
  },
  mounted() {
    axios
      .get('server.php')
      .then(response => {
        console.log(response);
        this.todos = response.data
      })
  }
}).mount('#app')