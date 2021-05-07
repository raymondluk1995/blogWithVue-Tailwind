<template>
  <div>
    <Hero />
  </div>
</template>

<script>
// @ is an alias to /src
import Hero from "./Hero.vue"
export default {
  name: 'Home',

  components: {
    Hero,
  }
}
</script>
