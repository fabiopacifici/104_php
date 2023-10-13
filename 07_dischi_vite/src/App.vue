<script>
import axios from 'axios'
export default {
  name: 'App',
  data() {
    return {
      base_url: 'http://localhost:9999/server.php',
      error: null,
      disks: []
    }
  },
  methods: {
    fetchData(url) {
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
  mounted() {
    this.fetchData(this.base_url);
  }
}

</script>

<template>
  <div>
    <h1>Hello vite</h1>
  </div>
</template>

<style>
</style>
