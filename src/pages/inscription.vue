<script>
import PersonnalInfos from '@/components/forms/inscription/PersonnalInfos.vue'
import Experiences from '@/components/forms/inscription/Experiences.vue'
import Motivations from '@/components/forms/inscription/Motivations.vue'

export default {
    components: {
        PersonnalInfos,
        Motivations,
        Experiences
    },
    methods: {
        loadComponent(component) {
            this.component = component
        }
    },
    
}
</script>

<template>
    <div class="container">
        <router-view/>
        <div class="col s8 offset-s2 ">
            <h1 class="title ">candidatures</h1>
            <p class="left-align">Les informations recueillies sur ce formulaire sont enregistrées dans un fichier informatisé par descodeuses.org pour le suivi des candidatures à nos formations, ainsi qu'au suivi administratif et pédagogique si vous êtes retenu.e.s pour suivre nos formations. Elles sont conservées pendant 3 ans et sont destinées à la Direction de la Formation, de l'ingénierie et des Partenariats, ainsi qu'aux directions territoriales. </p>
            <br>
            <p class="left-align">Conformément à la loi « informatique et libertés », vous pouvez exercer votre droit d'accès aux données vous concernant et les faire rectifier en contactant : </p>
            <address class="center-align">
                A l'attention du délégué à la protection des données DesCodeuses MVAC 20e <br>
                18 rue Ramus <br> 75020 Paris <br>
            </address> 
            <br>
            <p class="center-align">ou par e-mail: rgpd@descodeuses.org.</p>
            <br><br><br>
            <div class="center-align">
                <a href="informations-personnelles" class="waves-effect waves-light btn">J'accepte</a>
            </div>
        </div>
        <div class="container center">
            <PersonnalInfos/>
            <Experiences />
            <Motivations/>
        </div>
    </div>
</template>
<style scoped>

</style>