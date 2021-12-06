<template>
  <div class="container"> 
    <h1>Tour de Heores</h1>
  </div>
  <div class="container">
    <heroe></heroe>
  </div>
</template>

<script>
import Heroe from './Heroe.vue';

export default {
  name: 'smart',
  props: {
    msg: String
  },
  components: {
    Heroe,
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
