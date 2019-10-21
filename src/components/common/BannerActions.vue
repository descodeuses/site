<template>
    <div>
        <div class="row">
            <div class="col s12 m4">
                <div class="card-panel teal one">
                    <h2 class="white-text">initier</h2>
                </div>
                <div class="left-align">
                    <p class="bold">Nous proposons des ateliers d'initiation à la programmation et des ateliers de sensibilisation aux opportunites de la Tech</p>
                    <ul class="left-align">
                        <li><i class="material-icons">alarm</i>Découverte de métiers du numérique.</li>
                        <li><i class="material-icons">alarm</i>Création de votre première page web.</li>
                        <li><i class="material-icons">alarm</i>Les outils de collaboration en ligne (slack, Google Drive).</li>
                    </ul>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card-panel teal two">
                    <h2 class="white-text">former</h2>                    
                </div>
                <div class="left-align">
                    <p class="bold">Nous formons pendant 6 mois au métier de développeuse Front-End</p>
                    <ul>
                        <li><i class="material-icons">code</i>Formez-vous aux compétences techniques Front-End skills</li>
                        <li><i class="material-icons">code</i>Formez-vous à la méthode agile</li>
                        <li><i class="material-icons">code</i>Formez-vous aux compétences transversales</li>
                    </ul>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card-panel teal three">
                    <h2 class="white-text">accompagner</h2>
                </div>
                <div class="left-align">
                    <p class="bold">Nous accompagnons chaque apprenante vers l'emploi:</p>
                    <ul>
                        <li><i class="material-icons">work</i>En proposant des ateliers collectifs favorisant l'échange et le partage d'expérience </li>
                        <li><i class="material-icons">work</i>En faisant des ateliers et coaching individuels sur-mesure (définir son parcours professionnel, adapter sa recherche d'emploi, préparer un entretien…)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
h2 {
    text-transform: uppercase;
    font-weight: bold;
    font-size: 2em;
    padding: 30px;
    background-color: rgba(242, 163, 63, 0.7)
}
.card-panel {

        background-size: 100%;
        background-repeat: no-repeat;
        background-position: center
}
.one {
    background-image: url("./../../assets/images/photos/descodeuses-femmes-codent-06.jpg");
}
.two {
    background-image: url("./../../assets/images/photos/descodeuses-femmes-codent-14.jpg");
}
.three {
    background-image: url("./../../assets/images/photos/descodeuses-femme-code.jpg");
}

ul li {
    text-transform: initial;
    text-align: left;
    list-style: none !important;
    list-style-type: none !important;
}

i {
    position: relative;
    top: 5px;
    padding-right: 5px
}

.bold{
    font-weight: bold;
} 
</style>
