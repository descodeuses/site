<script>
export default {
    data() {
        return {
            motivation: {

            }
        }
    }
}
</script>

<template>
    <div class="col s8 offset-s2">
        <h1 class="title is-uppercase">Motivations</h1>
        <span class="help-text">* les champs sont obligatoires</span>
        <div class="row left-align">
            <h2>Pré-requis obligatoires : </h2>
            <p>Pour évaluer votre motivation, nous allons regarder que vous avez terminé les parcours que nous vous conseillons sur OPC. Voici comment faire : </p>
            <ol>
                <li>Rendez-vous sur <a href="https://openclassrooms.com/fr/" target="_blank">Openclassroom</a></li>
                <li>Inscrivez-vous, la formule solo est gratuite pour les demandeuses d’emploi, il suffit simplement de leur envoyer votre numéro d’Allocataire après crée votre compte. <a href="https://openclassrooms.com/fr/partners/pole-emploi/offers" target="_blank">Voici le lien</a></li>
                <li>Choisissez  le parcours ‘’apprenez et créez votre site WEB avec HTML5 et CSS3’’</li>
            </ol>
        </div>
        <div class="row">
            <form action="">
                <div class="row">
                    <div class="input-field col s12 left-align">
                        <h2>Vous avez un Github ? </h2>
                        <input 
                            type="text"
                            v-model="motivation.github"
                            name="github"
                            placeholder="ex. https://github.com/descodeuses" 
                            class="validate" 
                            id="github"/>
                    </div>
                </div>
                <div class="row left-align">
                    <h2>Racontez-nous une situation personnelle ou professionnelle durant laquelle vous avez surmonté un obstacle et de quelle manière ?</h2>
                    <textarea
                        v-model="motivation.obstacle" 
                        name="obstacle" 
                        cols="30" 
                        rows="10" 
                        class="materialize-textarea"></textarea>
                    <p class="help-text error">Ce champs obligatoire</p>
                </div>
                <div class="row left-align">
                    <h2 for="">Pourquoi voulez-vous intégrer la formation DESCODEUSES ? *</h2>
                    <p class="help-text">Détaillez votre motivation avec vos mots à vous. Vous pouvez également faire une vidéo (3min max), un site simple ou tout autre chose qui montre votre envie, votre motivation et vos compétences !</p>
                    <textarea 
                        v-model="motivation.whydescodeuses"
                        name="whydescodeuses"
                        cols="30" 
                        rows="10" 
                        class="materialize-textarea"></textarea>
                    <p class="help-text error">Ce champs obligatoire</p>
                </div>
                <div class="row left-align">
                    <h2 for="">Quel parcours professionnel envisagez-vous après la formation ?</h2>
                    <textarea 
                        v-model="motivation.afterformation"
                        name="afterformation"
                        cols="30" 
                        rows="10" 
                        class="materialize-textarea"></textarea>
                    <p class="help-text error">Ce champs obligatoire</p>
                </div>
                <div class="row left-align">
                    <h2 for="">Décrivez le métier de codeuse - developpeuse ?</h2>
                    <textarea 
                        v-model="motivation.developerdescription"
                        name="developerdescription"
                        cols="30" 
                        rows="10" 
                        class="materialize-textarea"></textarea>
                    <p class="help-text error">Ce champs obligatoire</p>
                </div>
                <div class="row left-align">
                    <div class="col s4">
                        <h2>Avez-vous un ordinateur ? *</h2>
                        <div class="control">
                            <label>
                                <input 
                                    v-model="motivation.havecomputer"
                                    name="havecomputer"
                                    value="yes"
                                    type="radio"/>
                                <span>Oui</span>
                            </label>
                        </div>
                        <div class="control">
                            <label>
                                <input 
                                    v-model="motivation.havecomputer"
                                    name="havecomputer"
                                    value="no"
                                    type="radio">
                                <span>Non</span>
                            </label>
                        </div>
                        <p class="help-text error">Ce champs obligatoire</p>
                    </div>
                    <div class="col s4 left-align">
                        <h2>Avez-vous participé à un atelier d’initiation à la programmation ?</h2>
                        <div class="control">
                            <label>
                                <input
                                    v-model="motivation.workshop"
                                    name="workshop"
                                    value="yes" 
                                    type="radio">
                                <span>Oui</span>
                            </label>
                        </div>
                        <div class="control">
                            <label>
                                <input
                                    v-model="motivation.workshop"
                                    name="workshop"
                                    value="no" 
                                    type="radio">
                                <span>Non</span>
                            </label>
                        </div>
                        <p class="help-text error">Ce champs obligatoire</p>
                    </div>
                    <div class="col s4 left-align">
                        <h2>Votre CV</h2>
                        <div class="file">
                            <label class="file-label">
                                <input 
                                    class="file-input" 
                                    type="file" 
                                    name="resume">
                            </label>
                        </div>
                        <p class="help-text error">Il est obligatoire avoir un CV</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<style scoped>
h1 {
    font-size: 25px;
    font-weight: bold;
    text-transform: uppercase
}
h2 {
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase
}
.error {
    color: red;
}
</style>