<template>
    <Main/>
    <Home/>
</template>

<script>
import Main from "./views/MainView.vue";
import Home from "./views/Home/HomeView.vue"

export default {
  name: 'App',
  components: {
    Main,
    Home
  }
}
</script>
