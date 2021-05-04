<template>
  <nav
    id="navbar"
    class="px-4 py-4 sm:py-6 bg-white shadow sm:bg-gray-900 sm:shadow-none sm:fixed w-full z-10"
  >
    <div
      class="container mx-auto flex flex-col sm:flex-row items-center justify-between"
    >
      <div class="text-3xl font-bold">
        <span class="sm:text-white">Lara</span>
        <span class="text-primary">Tips</span>
      </div>
      <div class="text-white mt-4 sm:mt-0 w-full sm:text-right sm:block sm:space-x-4">
        <NavbarLink to="/articles" label="Articles" />
        <NavbarLink to="/about" label="About" />
        <NavbarLink to="/contact" label="Contact" />
      </div>
    </div>
  </nav>
</template>

<script>
import NavbarLink from './NavbarLink.vue'
export default {
  components: {
    NavbarLink
  }
}
</script>
