<template>
  <div>
      <div class="space-y-8 sm:space-y-16">
        <Article />
        <Article />
        <Article />
        <Article />
        <Article />
      </div>

      <div class="py-2 sm:py-6">
          <router-link to="/articles"
          class="px-4 py-2 sm:px-6 bg-primary text-white rounded focus:outline-none"
          >View All</router-link>
      </div>
  </div>
</template>

<script>
import Article from "@/components/Article.vue";
export default {
    components:{
        Article,
    }
}
</script>

<style>

</style>