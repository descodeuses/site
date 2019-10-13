<script>
import Footer from './components/ui/Footer.vue'
import Navbar from './components/ui/Navbar.vue'

import 'materialize-css'

export default {
    name: 'app',
    components: {
        Footer,
        Navbar,

    },
    data(){
        return {
             component: ''
        }
    },
    methods: {
        loadComponent(component) {
            this.component = component
        }
    },
}
</script>

<template>
    <div id="app">
        <Navbar/>
        <router-view/>
        <Footer/>
    </div>
</template>


<style>
@import '~materialize-css/dist/css/materialize.min.css';


#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;;
}




</style>
