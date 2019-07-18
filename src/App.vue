<template>
  <div id="app">
    <Navbar/>
    <img alt="Vue logo" src="./assets/cover_decodeuses.png">
    <Header/>
    <Inscription/>
    <Footer/>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import Inscription from './components/forms/Inscription.vue'
import Footer from './components/ui/Footer.vue'
import Navbar from './components/ui/Navbar.vue'
import Header from './components/ui/Header.vue'
import 'materialize-css'

export default {
  name: 'app',
  components: {
    HelloWorld,
    Inscription,
    Footer,
    Navbar,
    Header
  }
}
</script>

<style>
@import '~materialize-css/dist/css/materialize.min.css';


#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>
