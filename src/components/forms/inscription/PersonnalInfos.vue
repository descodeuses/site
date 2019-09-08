<template>
    <div class="col s8 offset-s2">
        <h1 class="center-align">Renseignements administratifs</h1>
        <div class="row">
            <form class="">
                <div class="row">
                    <div class="input-field col s2">
                        <label for="first_name">Quel est votre genre ? *</label>
                        <select name="" id="">
                            <option value="">Femme</option>
                            <option value="">Homme</option>
                            <option value="">Autre</option>
                        </select>
                    </div>
                    <div class="input-field col s5">
                        <label for="first_name">Prénom *</label>
                        <input id="first_name" type="text" class="input">
                        <p class="help-text error">Ce champs obligatoire</p>
                    </div>
                    <div class="input-field col s5">
                        <label for="last_name">Nom *</label>
                        <input id="last_name" type="text" class="input">
                        <p class="help-text error">Ce champs obligatoire</p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="birthday">Date de naissance *</label>
                        <input id="birthday" type="text" class="input">
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                    <div class="input-field col s6">
                        <label for="nationality">Nationalité *</label>
                        <input value="" id="nationality" type="text" class="input">
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <label for="address">Adresse postale complète *</label>
                        <input id="address" type="text" class="input">
                        <p class="help-text error">Ce champs obligatoire</p>
                    </div>
                    <div class="input-field col s4">
                        <label for="addresscomplementaire">Complement d'adresse</label>
                        <input id="addresscomplementaire" type="text" class="input">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="postcode">Code postal *</label>
                        <input id="postcode" type="text" class="input">
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                    <div class="input-field col s6">
                        <label for="email">Ville *</label>
                        <input id="email" type="email" class="input">
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 ">
                        <label for="telephone">Téléphone *</label>
                        <input id="telephone" type="text" class="input">
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                    <div class="input-field col s6 ">
                        <label for="email">Email *</label>
                        <input id="email" type="email" class="input">
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                </div>
                <div class="row">
                    <h2 class="">Statut au moment de votre candidature *</h2>
                    <p class="help">plusieur choix possible</p>
                    <br>
                    <div class="row">
                        <div class="col s6">
                            <div class="field">
                                <label>
                                    <input id="student" type="checkbox" class="">
                                    <span>Élève ou étudiant·e</span>
                                </label>
                            </div>
                            <div class="field ">
                                <label for="employed">
                                    <input id="employed" type="checkbox" class="">
                                    <span>Salarié·e</span>
                                </label>
                            </div>
                            <div class="field ">
                                <label for="unployed" class="checkbox">
                                    <input id="unployed" type="checkbox" class="">
                                    <span>Demandeur·se d'emploi</span>
                                </label>
                            </div>
                            <div v-if="unployed">
                                <div class="field " >
                                    <label for="email">
                                        <input id="email" type="checkbox" class="">
                                        <span>Indemnisé.e par Pôle Emploi</span>
                                    </label>
                                </div>
                                <div class="field ">
                                    <label for="email">
                                        <input id="email" type="checkbox" class="">
                                        <span>Non indemnisé.e par Pôle Emploi</span>
                                    </label>
                                </div>
                                <div class="field ">
                                    <label for="email">
                                        <input id="email" type="checkbox" class="">
                                        <span>À quel Pôle emploi êtes-vous inscrit·e ?</span>
                                    </label>
                                </div>
                                <div class="field ">
                                    <label for="email">
                                        <input id="email" type="checkbox" class="input">
                                        <span> Numéro Pôle Emploi</span>
                                    </label>
                                </div>
                            </div>
                            <div class="field ">
                                <label for="rsa">
                                    <input id="rsa" type="checkbox" class="">
                                    <span>Allocataire RSA</span>
                                </label>
                            </div>
                            
                        </div>
                        <div class="col s6">
                            <div class="field ">
                                <label for="ass">
                                    <input id="ass" type="checkbox" class="">
                                    <span>Allocataire ASS</span>
                                </label>
                            </div>
                            <div class="field ">
                                <label for="ash">
                                    <input id="ash" type="checkbox" class="">
                                    <span>Allocataire ASH</span>
                                </label>
                            </div>
                            <div class="field ">
                                <label for="missionlocal">
                                    <input id="missionlocal" type="checkbox" class="">
                                    <span>Allocataire de la Garantie jeunes de la Mission Locale</span>
                                </label>
                            </div>
                            <div class="field ">
                                <label for="refugee">
                                    <input id="refugee" type="checkbox" class="">
                                    <span>Réfugié·e politique statutaire</span>
                                </label>
                            </div>
                        </div>
                        <p class="help-text error">Au moins un des options est obligatoire</p>
                    </div>
                </div>
            </form>
        </div>
        <br><br>
        <div class="center-align group-button">
            <a href="candidature" class="waves-effect waves-light btn">Retourner</a>
            <a href="criteres-de-candidature" class="waves-effect waves-light btn">Suivant</a>
        </div>
    </div>
</template>
<style scoped>
.error {
    color: red
}
.col {
    text-align: left
}
.btn {
    margin-right: 14px
}
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

</style>
