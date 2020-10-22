<script>
import Timeline from '@/components/ui/Timeline.vue'
export default {
    components: {
        Timeline
    }

}
</script>
<template>
    <div id="page-formation">
        <div class="row">
            <header class="header-page">
                <h2 class="heading">La formation Developpeuse WEB</h2>
            </header>
        </div>
        <div class="row">
            <div class="col m4 offset-m2 left-align">
                <h2 class="subheading">Notre équipe pédagogique</h2>
                <p>Notre équipe pédagogique est formée de professionnels du développement web.</p>
                <p>Des formatrices et formateurs au service des stagiaires.</p>
            </div>
            <div class="col m4 left-align">
                <h2 class="subheading">Notre programme detaillé</h2>
                <p>Les prochaines sessions de formation démarrent le 18 janvier 2021.</p>
                <p>Ces formations sont financées grâce a nos partenaires Paris code et pôle emploi.</p>
                <a href="frontend">Voici le contenu de la formation.</a>
            </div>
        </div>
        <div class="row">

        </div>
        <div>
            <Timeline/>
        </div>
    </div>
</template>
<style lang="scss" scoped>
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
h2, .heading {
    font-size: 25px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    color: #312A6B
}

h4 {
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    color: #312A6B
}
@media only screen and (max-width: 600px) {
    #page-formation {
        h2, h3, h4, p {
            font-size: 100%
        }
    }
}

</style>
