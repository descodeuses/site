<script>
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
        <router-view/>
        <Header/>
        <BannerPartners/>
        <BannerActions/>
        <BannerActivities/>
        <BannerSchedule/>
        <!-- <Inscription @loadComponent="loadComponent" v-if="component === 'inscription'" /> -->
        <CtaNewsLetter/>
    </div>
</template>
