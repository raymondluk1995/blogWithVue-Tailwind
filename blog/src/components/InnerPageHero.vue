<template>
  <div class="relative z-0 h-40 sm:h-64">
    <img :src="imageUrl" alt="about" class="h-full w-full object-cover" />
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-primary opacity-50">
      <div
        class="container mx-auto sm:px-0 text-white h-full w-full flex flex-col items-center justify-center text-2xl sm:text-5xl sm:justify-end"
      >
        <div class="mb -4 sm:mb-8 text-center">{{ title }}</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    props: {
        imageUrl: {
            type: String,
            required: true,
        },
        title: {
            type: String,
            required: true,
        }
    }
};
</script>
