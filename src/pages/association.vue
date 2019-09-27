<script>
export default {
        
}
</script>

<template>
    <div>
        <router-view/>
        <div class="row">
            <header>
                <div class="col m8 offset-m2 white back">
                    <h2>Une start-up sociale.</h2>
                    <i class="fab fa-adn"></i>
                    <p class="">Nous sommes une start-up sociale qui réduit les inégalités de genre et de territoire en répondant aux besoin de formation au numérique des femmes issues de quartiers prioritaires de la ville. </p>
                </div>
            </header>
        </div>
        <div class="row">
            <div class="col m8 offset-m2 center-align">
                <h2>DesCodeuses: Formation au numérique pour toutes les femmes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col m5 card offset-m1">
                <h2>Vision</h2>
                <p class="content">Toutes les femmes indépendemment de leur origine social ont accès aux métiers qui définissent le monde de demain. </p>
            </div>
            <div class="col m5 card">
                <h2>Missions</h2>
                <p class="content">Développer le pouvoir d'agir des femmes des quartiers prioritaires en les outillant, en les formant, en les accompagnant vers les métiers valorisés du numérique. </p>
            </div>
        </div>
        <div class="row left-align">
            <div class="col m8 offset-m2">
                <h2 class="center-align">Objectifs</h2>
                <ol>
                    <li>Sensibiliser les femmes aux métiers en besoin en compétences techniques par des ateliers d’initiation à la programmation.</li>
                    <li>Former les femmes par un parcours complet de 6 mois, à des métiers techniques (développement web, design, traitement de la data)</li>
                    <li>Accompagner les femmes dans leur recherche d’emploi en les préparant à la valorisation de leurs compétences et à la rencontre avec des Entreprises recruteuses</li>
                    <li>Favoriser l’autonomie numérique et le développement de l’estime de soi des femmes des quartiers par des ateliers de coaching et de mentorat.</li>
                </ol>
            </div>
        </div>
        <div class="row">
             <div class="col m4 offset-m1 left-align">
                <h2 class="">Nos principes d'action</h2>
                <ul class="left-align">
                    <li>Respecter le parcours social de chaque femme</li>
                    <li>Promouvoir l'égalité femmes / hommes</li>
                    <li>Lutter contre les inégalités de genre et de territoires</li>
                </ul>
                 <h2>Notre offre</h2>
                <ol>
                    <li>Accès à nos ateliers courts de sensibilisation et de formation au code numérique</li>
                    <li>Accès à notre formation gratuite de 6 mois de développeuse web</li>
                    <li>Accès à un accompagnement personnalisé jusqu'à l'emploi</li>
                    <li>Accès à des ateliers d'empowerment, de coaching, à des conférences avec des professionnels.</li>
                </ol>
            </div>
            <div class="col m6">
                <img src="@/assets/images/photos/descodeuses-femmes-codent 02.jpg" alt="">
            </div>
            <div class="col m4 offset-m1 left-align">
               
            </div>
        </div>
        <h2 class="heading">L'équipe</h2>
        <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="@/assets/images/equipe/souad.jpg">
                        <span class="card-title">Souad <br>
                            Confondatrice/CEO
                        </span>
                    </div>
                    <div class="card-content">
                        <i class="fab fa-500px"></i>
                        <p>Je m'assure que chaque nouveau membre comprenne notre mission, j'anime et je coordonne les différents rôles de l'équipe, j'assure les relations publiques, je recherche de nouveaux partenaires, je vais collecter des fonds, je forme les candidates sur plusieurs sujets, je suis la "problem solver" c'est à dire que je trouve des solutions à tous les problèmes !</p>
                    </div>
                    <div class="card-action">
                        <a href="#">linkedin</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="@/assets/images/equipe/michelson.jpg">
                        <span class="card-title">Michelson <br>
                        Cofondateur/CTO
                        </span>
                    </div>
                    <div class="card-content">
                        <p>Je suis chargé de la partie technique de Descodeuses et responsable du site web coté front.  J’anime également  des ateliers de formation</p>
                    </div>
                    <div class="card-action">
                        <a href="#">linkedin</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="@/assets/images/equipe/justine.jpg">
                        <span class="card-title">Justine <br>
                        CFO
                        </span>
                    </div>
                    <div class="card-content">
                        <p>Je mets en place des budgets, réalise le suivi du P&L, je recherche des financements et des partenariats, je travaille également sur la stratégie de développement de DesCodeuses en France.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">linkedin</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="@/assets/images/equipe/azul.jpg">
                        <span class="card-title">Azul <br>
                        Project Manager communication</span>
                    </div>
                    <div class="card-content">
                        <p>Je suis responsable de la communication sur les réseaux sociaux. Je suis toujours disponible pour repondre a vos questions et je gere le developpement de projets pour promouvoir DesCodeuses.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">linkedin</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="@/assets/images/equipe/olivier.jpg">
                        <span class="card-title">Olivier <br>
                        Project Manager Partenariats</span>
                    </div>
                    <div class="card-content">
                        <p>Je développe, gère et anime le parcours d'accompagnement à l'emploi personnalisé qui est à destination des femmes des quartiers prioritaires.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">linkedin</a>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="@/assets/images/equipe/nolween.jpg">
                        <span class="card-title">Nolween <br>
                        Project Manager Emploi</span>
                    </div>
                    <div class="card-content">
                        <p>J'accompagne les Apprenantes dans leur recherche de stage ou d'emploi en parallèle de leur formation. J'anime également certains des ateliers individuels ou collectifs tout au long de ce parcours. Pour nous, ce parcours est déterminant dans la réussite de notre mission : faire que chaque apprenante trouve un emploi à l'issue de la formation</p>
                    </div>
                    <div class="card-action">
                        <a href="#">linkedin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
h2 {
    font-size: 25px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    color: #312A6B
}
header {
    height: 70vh;
    padding: 50px 0;
    background-image: url("./../assets/cover_decodeuses.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    filter: grayscale(30%);
}

.white.back {
    background: #FFF
}

ul li, ol li {
    text-transform: initial;
    padding: 10px
}

.card {
    margin: 15px;
    padding: 0
}
.card-title {
    background: #f9b233;
    margin: 0 auto
}

.card h2 {
    background: #f9b233;
    margin: 0;
    padding: 16px;
    color: #FFF
}

.content {
    padding: 16px
}
.card-action a {
    color: #0077B5 !important;
}

img {
    width: 100%
}
</style>