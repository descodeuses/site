<script>
import Timeline from '@/components/ui/Timeline.vue'
export default {
    components: {
        Timeline
    }
    
}
</script>
<template>
    <div>
        <div class="row">
            <header class="header-page">
                <h2 class="heading">Pédagogie</h2>
            </header>
        </div>
        <div class="row">
            <div class="col m4 offset-m2 left-align">
                <h2 class="subheading">Equipe pédagogique</h2>
                <p>Notre équipe pédagogique est formée de professionnels du développement web.</p>
                <p>4 formateurs assureront pendant 6 mois les cours auprès des apprenantes.</p>
            </div>
            <div class="col m4 left-align">
                <h2 class="subheading">Contenu de la formation</h2>
                <p>Nous lançons notre première formation longue en Novembre 2019.</p>
                <p>Cette formation est <strong>gratuite</strong> et forme au métier de web développeuse.</p>
                <a href="developpeuse">Voici le contenu de la formation</a>
            </div>
        </div>
        <div class="row">
            
        </div>
        <div>
            <Timeline/>
        </div>
    </div>
</template>
<style scoped>
body {
  background: #e6e6e6;
  font-family: "Roboto", sans-serif;
  font-weight: 400;
}
h2 {
    font-size: 25px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    color: #312A6B
}
</style>