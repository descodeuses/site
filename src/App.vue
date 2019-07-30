<script>
import Inscription from './components/forms/Inscription.vue'
import Footer from './components/ui/Footer.vue'
import Navbar from './components/ui/Navbar.vue'
import Header from './components/ui/Header.vue'
import CtaNewsLetter from './components/ui/CtaNewsLetter.vue'
import BannerActions from './components/common/BannerActions.vue'
import BannerPartners from './components/common/BannerPartners.vue'
import BannerSchedule from './components/common/BannerSchedule.vue'
import BannerActivities from './components/common/BannerActivities.vue'
import 'materialize-css'

export default {
    name: 'app',
    components: {
        Inscription,
        Footer,
        Navbar,
        Header,
        BannerActions,
        BannerPartners,
        BannerSchedule,
        CtaNewsLetter,
        BannerActivities
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
  color: #2c3e50;
}
</style>
