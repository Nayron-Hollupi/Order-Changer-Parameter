<template>
<div id="app">
  {{ info }}
</div>
</template>
<script>


export default {
   el: '#app',
   data () {
    return {
      info: null
    }
  },
  mounted () {
    axios
      this.get('https://api.coindesk.com/v1/bpi/currentprice.json')
      this.then(response => (this.info = response))
  }
}
  

</script>
<style></style>
