<script>
import Header from '@/components/ui/Header.vue'
import BannerActions from '@/components/common/BannerActions.vue'
import BannerPartners from '@/components/common/BannerPartners.vue'
import Newsletter from '@/components/forms/Newsletter.vue'

import 'materialize-css'

export default {
    name: 'index',
    components: {
        Header,
        BannerActions,
        BannerPartners,
        Newsletter
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
        <!-- <Inscription @loadComponent="loadComponent" v-if="component === 'inscription'" /> -->
        <div class="row cta" id="newsletter">
            <div class="col m4 offset-m1 card">
                <Newsletter/>
                
            </div>

        </div>
        <!-- <CtaNewsLetter/> -->
        
    </div>
</template>
<style scoped>
.cta {
    padding: 100px 0;
    background-image: url("./..//assets/images/photos/descodeuses-femmes-codent-07.jpg");
    background-size: 80%;
    background-repeat: no-repeat;
    background-position: 100%
}
.card {
    padding: 40px !important
}
</style>