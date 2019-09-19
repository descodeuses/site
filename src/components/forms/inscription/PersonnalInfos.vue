<script>
export default {
    data() {
        return {
            administration_infos: {
                statut: {

                }
            }
        }
    }
}
</script>
</script>
<template>
    <div class="col s8 offset-s2">
        <h1 class="center-align">Renseignements administratifs</h1>
        <div class="row">
            <form class="">
                <div class="row">
                    <div class="input-field col s2">
                        <label for="first_name">Quel est votre genre ? *</label>
                        <select 
                            v-model="administration_infos.gender" 
                            name="administration_infos" 
                            id="">
                            <option value="woman">Femme</option>
                            <option value="man">Homme</option>
                            <option value="other">Autre</option>
                        </select>
                    </div>
                    <div class="input-field col s5">
                        <label for="first_name">Prénom *</label>
                        <input
                            v-model="administration_infos.first_name"  
                            name="administration_infos"
                            id="first_name" 
                            type="text" 
                            class="input"/>
                        <p class="help-text error">Ce champs obligatoire</p>
                    </div>
                    <div class="input-field col s5">
                        <label for="last_name">Nom *</label>
                        <input 
                            v-model="administration_infos.last_name" 
                            name="administration_infos"
                            id="last_name" 
                            type="text" 
                            class="input"/>
                        <p class="help-text error">Ce champs obligatoire</p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="birthday">Date de naissance *</label>
                        <input
                            v-model="administration_infos.birthday"
                            name="administration_infos"
                            id="birthday" 
                            type="text" 
                            class="input"/>
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                    <div class="input-field col s6">
                        <label for="nationality">Nationalité *</label>
                        <input 
                            v-model="administration_infos.nationality"
                            administration_infos
                            value="" 
                            id="nationality" 
                            type="text" 
                            class="input"/>
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s8">
                        <label for="address">Adresse postale complète *</label>
                        <input
                            v-model="administration_infos.address"
                            name="administration_infos"
                            id="address" 
                            type="text" 
                            class="input"/>
                        <p class="help-text error">Ce champs obligatoire</p>
                    </div>
                    <div class="input-field col s4">
                        <label for="addresscomplementaire">Complement d'adresse</label>
                        <input 
                            v-model="administration_infos.addresscomplementaire"
                            name="administration_infos"
                            id="addresscomplementaire" 
                            type="text" 
                            class="input"/>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label for="postcode">Code postal *</label>
                        <input 
                            v-model="administration_infos.postcode"
                            name="administration_infos"
                            id="postcode" 
                            type="text" 
                            class="input"/>
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                    <div class="input-field col s6">
                        <label for="email">Ville *</label>
                        <input
                            v-model="administration_infos.email"
                            name="administration_infos"  
                            id="email" 
                            type="email" 
                            class="input"/>
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 ">
                        <label for="telephone">Téléphone *</label>
                        <input 
                            v-model="administration_infos.telephone" 
                            name="administration_infos"
                            id="telephone" 
                            type="text" 
                            class="input"/>
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                    <div class="input-field col s6 ">
                        <label for="email">Email *</label>
                        <input 
                            v-model="administration_infos.birthday"
                            name="administration_infos"
                            id="email" 
                            type="email" 
                            class="input"/>
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
                                    <input 
                                        v-model="administration_infos.statut.student"
                                        value="student"
                                        name="administration_infos"
                                        id="student" 
                                        type="checkbox" 
                                        class=""/>
                                    <span>Élève ou étudiant·e</span>
                                </label>
                            </div>
                            <div class="field ">
                                <label for="employed">
                                    <input 
                                        v-model="administration_infos.statut.employed" 
                                        value="employed"
                                        name="administration_infos"
                                        id="employed" 
                                        type="checkbox" 
                                        class=""/>
                                    <span>Salarié·e</span>
                                </label>
                            </div>
                            <div class="field ">
                                <label for="unployed" class="checkbox">
                                    <input 
                                        v-model="administration_infos.statut.unployed" 
                                        value="unployed" 
                                        name="administration_infos"
                                        id="unployed" 
                                        type="checkbox" 
                                        class=""/>
                                    <span>Demandeur·se d'emploi</span>
                                </label>
                            </div>
                            <div v-if="administration_infos.statut.unployed === true">
                                <div class="field" v-if="administration_infos.statut.not_allowance === false">
                                    <label for="allowance_poleemploi">
                                        <input 
                                            v-model="administration_infos.statut.allowance_poleemploi"
                                            value="allowance_poleemploi" 
                                            name="administration_infos"
                                            id="allowance_poleemploi" 
                                            type="checkbox" 
                                            class=""/>
                                        <span>Indemnisé.e par Pôle Emploi</span>
                                    </label>
                                </div>
                                <div class="field" v-if="administration_infos.statut.allowance_poleemploi === false">
                                    <label for="not_allowance">
                                        <input 
                                            v-model="administration_infos.statut.not_allowance"
                                            value="not_allowance"
                                            name="administration_infos"
                                            id="not_allowance" 
                                            type="checkbox" 
                                            class=""/>
                                        <span>Non indemnisé.e par Pôle Emploi</span>
                                    </label>
                                </div>
                                <div class="input-field">
                                        <input 
                                            v-model="administration_infos.statut.poleemploi_office"  
                                            name="poleemploi_office"
                                            id="poleemploi_office" 
                                            type="text" 
                                            class=""/>
                                         <label for="poleemploi_office">À quel Pôle emploi êtes-vous inscrit·e ?
                                    </label>
                                </div>
                                <div class="input-field">
                                        <input 
                                            v-model="administration_infos.statut.poleemploi_inscriptionnumber" 
                                            name="poleemploi_inscriptionnumber" 
                                            id="poleemploi_inscriptionnumber" 
                                            type="text" 
                                            class="validate"/>
                                        <label for="poleemploi_inscriptionnumber">Numéro Pôle Emploi
                                    </label>
                                </div>
                                <div v-if="administration_infos.statut.allowance_poleemploi === true">
                                    <div class="field">
                                        <label for="ass">
                                            <input 
                                                v-model="administration_infos.statut.ass" 
                                                value="ass" 
                                                name="administration_infos"
                                                id="ass" 
                                                type="checkbox" 
                                                class=""/>
                                            <span>Allocataire ASS</span>
                                        </label>
                                    </div>
                                    <div class="field ">
                                        <label for="ash">
                                            <input 
                                                v-model="administration_infos.statut.ash"
                                                value="ash"  
                                                name="administration_infos"
                                                id="ash" 
                                                type="checkbox" 
                                                class=""/>
                                            <span>Allocataire ASH</span>
                                        </label>
                                    </div>
                                    <div class="field ">
                                        <label for="missionlocal">
                                            <input 
                                                v-model="administration_infos.statut.missionlocal" 
                                                value="missionlocal" 
                                                name="administration_infos"
                                                id="missionlocal" 
                                                type="checkbox" 
                                                class=""/>
                                            <span>Allocataire de la Garantie jeunes de la Mission Locale</span>
                                        </label>
                                    </div>
                                     <div class="field ">
                                        <label for="other_allowance">
                                            <input 
                                                v-model="administration_infos.statut.other_allowance" 
                                                value="other_allowance" 
                                                name="administration_infos"
                                                id="other_allowance" 
                                                type="checkbox" 
                                                class=""/>
                                            <span>Autre</span>
                                        </label>
                                        <div class="input-field" v-if="administration_infos.statut.other_allowance === true">
                                            <input 
                                                v-model="administration_infos.statut.other_allowance_custom"  
                                                type="text"
                                                class="validate"
                                                id="other_allowance_custom">
                                            <label for="other_allowance_custom">Quel indemnité ?</label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col s6">
                            <div class="field ">
                                <label for="rsa">
                                    <input 
                                        v-model="administration_infos.statut.rsa"  
                                        name="administration_infos"
                                        id="rsa" 
                                        type="checkbox" 
                                        class=""/>
                                    <span>Allocataire RSA</span>
                                </label>
                            </div>
                            <div class="field ">
                                <label for="refugee">
                                    <input 
                                        v-model="administration_infos.statut.refugee"  
                                        value="refugee"
                                        name="administration_infos"
                                        id="refugee" 
                                        type="checkbox" 
                                        class=""/>
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
