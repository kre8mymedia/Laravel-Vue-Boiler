<template>
    <div>
      <router-view />
    </div>
</template>

<script>
  import ExampleComponent from './components/ExampleComponent';

  export default {
    name: 'app',
    components: {
      ExampleComponent,
    },

    mounted() {
      console.log('APP mounted.')
    }
  }
</script>
