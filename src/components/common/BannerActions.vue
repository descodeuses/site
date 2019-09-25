<template>
    <div>
        <div class="row">
            <div class="col s12 m4">
                <div class="card-panel teal one">
                    <h2 class="white-text">initier</h2>
                </div>
                <div class="left-align">
                    <p class="bold">Nous proposons des ateliers de découverte et de pratique sur les thématiques suivantes:</p>
                    <ul class="left-align">
                        <li><i class="material-icons">alarm</i>Les métiers du numériques ( web developpeuse, data analyst, UX/UI)</li>
                        <li><i class="material-icons">alarm</i>Les bases du code informatique ( langage, database)</li>
                        <li><i class="material-icons">alarm</i>Les outils du numérique (...)</li>
                    </ul>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card-panel teal two">
                    <h2 class="white-text">former</h2>                    
                </div>
                <div class="left-align">
                    <p class="bold">Nous formons pendant 6 mois et gratuitement au métier de web développeuse:</p>
                    <ul>
                        <li><i class="material-icons">code</i>Développez vos compétences techniques ( interfaces, base de données, design...)</li>
                        <li><i class="material-icons">code</i>Formez- vous aux méthodes agiles (lean development, stand-up meetings...)</li>
                        <li><i class="material-icons">code</i>Apprenez les compétences transversales du numérique ( anglais technique, SEO...)</li>
                    </ul>
                    <p>voir le programme detaillée</p>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card-panel teal three">
                    <h2 class="white-text">accompagner</h2>
                </div>
                <div class="left-align">
                    <p class="bold">Nous accompagnons chaque apprenante vers l'emploi:</p>
                    <ul>
                        <li><i class="material-icons">school</i>Coaching individuel sur mesure </li>
                        <li><i class="material-icons">school</i>Ateliers collectifs d'accompagnement avec programme personnalisé.</li>
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
