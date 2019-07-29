<script>
import Inscription from '@/components/forms/Inscription.vue'
import Footer from '@/components/ui/Footer.vue'
import Navbar from '@/components/ui/Navbar.vue'
import Header from '@/components/ui/Header.vue'
import CtaNewsLetter from '@/components/ui/CtaNewsLetter.vue'
import BannerActions from '@/components/common/BannerActions.vue'
import BannerPartners from '@/components/common/BannerPartners.vue'
import BannerSchedule from '@/components/common/BannerSchedule.vue'
import BannerActivities from '@/components/common/BannerActivities.vue'
import 'materialize-css'

export default {
    name: 'index',
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
    <div id="index">
        <router-view></router-view>
        <Header/>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolor quibusdam modi ipsam, vitae exercitationem doloremque alias neque reprehenderit voluptatum atque, blanditiis ipsa maxime accusamus quis incidunt excepturi. Officia, explicabo.</p>
        <BannerPartners/>
        <BannerActions/>
        <BannerActivities/>
        <BannerSchedule/>
        <Inscription @loadComponent="loadComponent" v-if="component === 'inscription'" />
        <CtaNewsLetter/>
    </div>
</template>


<style>
@import '~materialize-css/dist/css/materialize.min.css';



</style>
