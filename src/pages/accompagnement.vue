<template>
    <div>
        <router-view/>
        <div class="row coach">
            <div class="col m5 offset-m1 left-align card">
                <div class="row">
                    <header class="header-page">
                        <h2 class="heading">Notre expertise emploi</h2>
                    </header>
                </div>
                <p>Nous accompagnons les femmes dans leur recherche d’emploi en les préparant à la valorisation de leurs compétences et à la rencontre d’entreprises susceptibles de les recruter. </p>
                <p>Pour cela, nous proposons 14 ateliers d’une durée de 4 heures tout au long de la formation et des entretiens individuels à la demande par nos expert(e)s de l’emploi.</p>
                <p>Chaque femme bénéficie d'un accompagnement et d’un suivi personnalisé et ce,  jusqu'à l’obtention d’un emploi dans le numérique. </p>
            </div>
        </div>
        <div class="row">
            <div class="col m8 offset-m2">
                <h3>Pour cela, les ateliers auront pour objectifs: </h3>
                <ul class="left-align">
                    <li>Réalisation d’un diagnostic de situation  afin d'optimiser la recherche d’emploi en tenant compte des spécificités de chacune</li>
                    <li>Définition des besoins en terme d’accompagnement à la recherche d'emploi en alternant les entretiens individuels et des phases d’échanges collectifs</li>
                    <li>Renforcement de la connaissance des services et outils disponibles dans le cadre de la recherche d’emploi (réseaux professionnels, job board, marché caché etc...)</li>
                    <li>Valorisation des atouts et des compétences professionnelles acquises</li>
                    <li>Identification et développement des savoir-être professionnels </li>
                    <li>Amélioration de la technique de recherche d'emploi (CV et lettre de motivation,candidatures spontanées, enquête métier,développer son réseau,préparation entretiens d’embauche, etc)</li>
                    <li>Prospection du marché du travail collective</li>
                    <li>Ciblage et valorisation des candidatures auprès des entreprises de la tech</li>
                    <li>Aborder et réussir son intégration en entreprise</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style scoped>
body {
  background: #e6e6e6;
  font-family: "Roboto", sans-serif;
  font-weight: 400;
}
h2, h3 {
    font-size: 25px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    color: #312A6B
}
ul li {
    list-style: disc;
    padding-bottom: 16px;
    text-transform: initial
}
.coach {
    padding: 100px 0;
    background-image: url("./..//assets/images/photos/descodeuses-femmes-codent-15.jpg");
    background-size: 80%;
    background-repeat: no-repeat;
    background-position: 100%
}
.card {
    padding: 40px !important
}

</style>