const { createApp } = Vue
createApp({
  data() {
    return {
      base_url: 'server.php',
      error: null,
      disks: []
    }
  },
  methods:{
    fetchData(url){
      axios
      .get(url)
      .then(response => {
        console.log(response);
        this.disks = response.data
      })
      .catch(err => {
        console.error(err.message);
        this.error = err.message
      })
    }
  },
  mounted(){
    this.fetchData(this.base_url);
  }

}).mount('#app')