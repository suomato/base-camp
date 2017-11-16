<template>
  <div class="example">
    <p class="example-message">{{ message }}</p>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        message: 'This is example component',
      };
    },
  };
</script>

<style lang="sass" scoped>
  .example-message
    color: #00d1b2
</style>
