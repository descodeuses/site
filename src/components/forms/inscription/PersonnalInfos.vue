<script>
import { ValidationProvider } from 'vee-validate';
import BaseButton from '@/components/elements/Button.vue'

export default {
    components: {
		ValidationProvider,
		BaseButton
    },
    data() {
        return {
            regexName: /^[A-Za-zÀ-ÖØ-öø-ÿ]+(([' -][A-Za-zÀ-ÖØ-öø-ÿ ])?[A-Za-zÀ-ÖØ-öø-ÿ]*)*$/,
            administration_infos: {
				statut: {}
			}
        }
	},
	created() {
		let form = this.$store.getters['register/form']
		if (form.info)
			this.administration_infos = form.info
	},
	methods: {
		goBack() {
			this.$store.dispatch('register/updateInfo', this.administration_infos)
			this.$emit('prevStep')
		},
		validate() {
			this.$validator.validateAll().then(result => {
				if (!result) return
				this.$store.dispatch('register/updateInfo', this.administration_infos)
				this.$emit('nextStep')
			})
		}
	}
}
</script>
<template>
    <div class="col m8 s12 offset-m2">
        <h1 class="center-align">Renseignements administratifs</h1>
        <div class="row">
            <form class="">
                <div class="row">
                    <div class="input-field col m2 s4">
                        <select
                            v-model="administration_infos.gender"
                            name="gender"
                            id="gender"
                            v-validate="'required'"
                            :class="{invalid: errors.has('gender')}">
                            <option value="" disabled selected>Genre *</option>
                            <option value="woman">Femme</option>
                            <option value="man">Homme</option>
                            <option value="other">Autre</option>
                        </select>
                        <span class="helper-text error" v-if="errors.has('gender')">obligatoire</span>
                    </div>
                    <div class="input-field col m5 s8">
                        <label :class="{active: administration_infos.first_name}" for="first_name">Prénom *</label>
                        <input
                            v-model="administration_infos.first_name"
                            name="first_name"
                            id="first_name"
                            type="text"
                            v-validate="{ required: true, regex: regexName}"
                            :class="{invalid: errors.has('first_name')}"/>
                        <span class="helper-text" data-error="Ce champs obligatoire"></span>
                    </div>
                    <div class="input-field col m5 s12">
                        <label :class="{active: administration_infos.last_name}" for="last_name">Nom *</label>
                        <input
                            v-model="administration_infos.last_name"
                            name="last_name"
                            id="last_name"
                            type="text"
                            v-validate="{ required: true, regex: regexName}"
                            :class="{invalid: errors.has('last_name')}"/>
                        <span class="helper-text" data-error="Ce champs obligatoire"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <label :class="{active: administration_infos.birthday}" for="birthday">Date de naissance</label>
                        <input
                            v-model="administration_infos.birthday"
                            name="birthday"
                            id="birthday"
                            type="text"
                            v-validate="'required|date_format:dd/MM/yyyy'"
                            :class="{invalid: errors.has('birthday')}"/>
                        <span class="helper-text" data-error="Ce champs obligatoire">JJ/MM/AAAA</span>
                    </div>
                    <div class="input-field col s6">
                        <label :class="{active: administration_infos.nationality}" for="nationality">Nationalité *</label>
                        <input
                            v-model="administration_infos.nationality"
                            name="nationality"
                            value="nationality"
                            id="nationality"
                            type="text"
                            v-validate="'required'"
                            :class="{invalid: errors.has('nationality')}"/>
                        <span class="helper-text" data-error="Ce champs obligatoire"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m8 s12">
                        <label :class="{active: administration_infos.address}" for="address">Adresse postale complète *</label>
                        <input
                            v-model="administration_infos.address"
                            name="address"
                            id="address"
                            type="text"
                            v-validate="'required'"
                            :class="{invalid: errors.has('address')}"/>
                        <span class="helper-text" data-error="Ce champs obligatoire"></span>
                    </div>
                    <div class="input-field col m4 s12">
                        <label :class="{active: administration_infos.addresscomplementaire}" for="addresscomplementaire">Complement d'adresse</label>
                        <input
                            v-model="administration_infos.addresscomplementaire"
                            name="addresscomplementaire"
                            id="addresscomplementaire"
                            type="text"
                            class="input"/>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6 s6">
                        <label :class="{active: administration_infos.postcode}" for="postcode">Code postal *</label>
                        <input
                            v-model="administration_infos.postcode"
                            name="postcode"
                            id="postcode"
                            type="text"
                            v-validate="'required|numeric|min:5|max:5'"
                            :class="{invalid: errors.has('postcode')}"/>
                        <span class="helper-text" data-error="Ce champs obligatoire"></span>
                    </div>
                    <div class="input-field col m6 s6">
                        <label :class="{active: administration_infos.city}" for="city">Ville *</label>
                        <input
                            v-model="administration_infos.city"
                            name="city"
                            id="city"
                            type="text"
                            v-validate="{ required: true, regex: regexName}"
                            :class="{invalid: errors.has('city')}"/>
                        <span class="helper-text" data-error="Ce champs obligatoire"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6 s12">
                        <label :class="{active: administration_infos.telephone}" for="telephone">Téléphone *</label>
                        <input
                            v-model="administration_infos.telephone"
                            name="telephone"
                            id="telephone"
                            type="text"
                            v-validate="'required|numeric|min:10|max:10'"
                            :class="{invalid: errors.has('telephone')}"/>
                        <span class="helper-text" data-error="Ce champs obligatoire"></span>
                    </div>
                    <div class="input-field col m6 s12">
                        <label :class="{active: administration_infos.email}" for="email">Email *</label>
                        <input
                            v-model="administration_infos.email"
                            name="email"
                            id="email"
                            type="email"
                            v-validate="'required|email'"
                            :class="{invalid: errors.has('email')}"/>
                        <span class="helper-text" data-error="Ce champs obligatoire"></span>
                    </div>
                </div>
                <div class="row">
                    <h2 class="">Statut au moment de votre candidature * <span class="help">(plusieur choix possible)</span></h2>
                    <p class="help"></p>
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
                                <label :class="{active: administration_infos.unployed}" for="unployed" class="checkbox">
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
                                <div class="field">
                                    <label :class="{active: administration_infos.statut.allowance_poleemploi}" for="allowance_poleemploi">
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
                                <div class="field">
                                    <label :class="{active: administration_infos.not_allowance}" for="not_allowance">
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
                                         <label :class="{active: administration_infos.statut.poleemploi_office}" for="poleemploi_office">À quel Pôle emploi êtes-vous inscrit·e ?
                                    </label>
                                </div>
                                <div class="input-field">
                                        <input
                                            v-model="administration_infos.statut.poleemploi_inscriptionnumber"
                                            name="poleemploi_inscriptionnumber"
                                            id="poleemploi_inscriptionnumber"
                                            type="text"
                                            class="validate"/>
                                        <label :class="{active: administration_infos.statut.poleemploi_inscriptionnumber}" for="poleemploi_inscriptionnumber">Numéro Pôle Emploi
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
                                            <label :class="{active: administration_infos.statut.other_allowance_custom}" for="other_allowance_custom">Quel indemnité ?</label>
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
                        <span class="helper-text" data-error="Au moins un des options est obligatoire"></span>
                    </div>
                </div>
            </form>
        </div>
        <div class="center">
			<BaseButton :func="goBack">
				Précédent
			</BaseButton>
			<BaseButton :func="validate">
				Suivant
			</BaseButton>
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
.help {
    text-transform: initial;
    font-size: 14px;
    font-weight: normal
}
</style>
