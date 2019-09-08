<script>
export default {
     data(){
        return {
          experiences: {
              experience:'',
          },
          language: {
                english: '',
                other: [],
                languageLevel: {
                    french:'',
                    english:'',
                    arabic:'',
                    other:''
                }
          },

        }
    },
}
</script>

<template>
    <div class="col s8 offset-s2">
        <h1 class="center-align">Critères de candidature</h1>
        <span class="help-text center-align">* les champs sont obligatoires</span>
        <div class="row">
            <form action="">
                <div class="row">
                    <div class="input-field col s12">
                        <h2>Avez-vous déjà eu une expérience en programmation et/ou de manipulation de données avant ? *</h2>
                        <div class="field">
                            <label for="yes">
                                <input type="radio" :value="true" id="yes" v-model="experiences.experience" name="experience">
                                <span>Oui, j'ai déjà codé</span>
                            </label>
                        </div>
                        <div class="field">
                            <label for="no">
                                <input type="radio" :value="false" id="no" v-model="experiences.experience" name="experience"> 
                                <span> Non, aucune experience</span>
                            </label>
                        </div>
                        <p class="help error">Ce champs obligatoire</p>
                    </div>

                    <div class="control" v-if="experiences.experience === true">
                        <h2>Racontez-nous vos expériences</h2>
                        <textarea name="experience" id="" cols="30" rows="5" class="materialize-textarea" value=""></textarea>
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                    
                    <div class="control" v-else-if="experiences.experience === false">
                        <h2>Pourquoi vouloir intégrer cette formation ?</h2>
                        <textarea  name="experience"  id="" cols="30" rows="5" class="materialize-textarea"></textarea>
                        <p class="help error">Ce champs obligatoire</p>
                    </div>
                </div>
                <div class="row">
                    <h2>Quel est votre dernier diplôme obtenu ? *</h2>
                    <p class="help-text">Information demandée à titre indicatif, en aucun cas discriminant !</p>
                    <input type="text" class="input" placeholder="ex. bac">
                    <p class="help error">Ce champs obligatoire</p>
                </div>
                <div class="row">
                    <h2 for="">Racontez-nous en quelques phrases votre histoire. *</h2>
                    <p class="help">Tout nous intéresse : études, travail, voyages, et autres occupations et passions.</p>
                    <textarea name="" id="" cols="30" rows="10" class="materialize-textarea"></textarea>
                    <p class="help error">Ce champs obligatoire</p>
                </div>
                <div class="row">
                    <h2>Vos langues</h2>
                    <p class="help-text">Information demandée à titre indicatif, ce n'est pas éliminatoire, ni déterminant</p>
                    <div class="field-body">
                        <div class="col s3">
                            <div class="control">
                                <label for="french">
                                    <input type="checkbox" class="" v-model="language.french" value="true" id="french">
                                    <span>Français</span>
                                </label>
                            </div>
                            <div class="control">
                                <label for="advancedFrench">
                                    <input type="radio" id="advancedFrench" v-model="language.languageLevel.french" value="advancedFrench">
                                    <span>Avancé</span>
                                </label>
                            </div>
                            <div class="control">
                                <label for="intermediaryFrench">
                                    <input type="radio" id="intermediaryFrench" v-model="language.languageLevel.french" value="intermediaryFrench">
                                    <span>Intermedière</span>
                                </label>
                            </div>
                            <div class="control">
                                <label for="beginningFrench">
                                    <input type="radio" id="beginningFrench" v-model="language.languageLevel.french">
                                    <span>Débutant.e </span>
                                </label>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="control">
                                <label for="english">
                                    <input type="checkbox" class="" v-model="language.english" value="true" id="english">
                                    <span>Anglais</span>
                                </label>
                            </div>
                            <div class="control">
                                <label for="advancedEnglish">
                                    <input type="radio" id="advancedEnglish" v-model="language.languageLevel.english" value="advancedEnglish"> 
                                    <span>Avancé</span>
                                </label>
                            </div>
                            <div class="control">
                                <label for="intermediaryEnglish">
                                    <input type="radio" id="intermediaryEnglish" v-model="language.languageLevel.english" value="intermediaryEnglish">
                                    <span>Intermedière</span>
                                </label>
                            </div>
                            <div class="control">
                                <label for="beginningEnglish">
                                    <input type="radio" id="beginningEnglish" v-model="language.languageLevel.english" value="beginningEnglish">
                                    <span>Débutant.e</span>
                                </label>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="control">
                                <label for="arabic">
                                    <input type="checkbox" class="" v-model="language.arabic" name="languageLevel" value="true" id="arabic">
                                    <span>Arabe</span>
                                </label>
                            </div>
                            <div class="control">
                                <label for="advancedArabic">
                                    <input type="radio" id="advancedArabic" v-model="language.languageLevel.arabic" name="languageLevel" value="advancedArabic">
                                    <span>Avancé</span>
                                </label>
                            </div>
                            <div class="control">
                                <label for="intermediaryArabic">
                                    <input type="radio" id="intermediaryArabic" v-model="language.languageLevel.arabic" name="languageLevel" value="intermediaryArabic">
                                    <span>Intermedière</span>
                                </label>
                            </div>
                            <div class="control">
                                <label for="beginningArabic">
                                    <input type="radio" id="beginningArabic" v-model="language.languageLevel.arabic" name="languageLevel" value="beginningArabic">
                                    <span>Débutant.e</span>
                                </label>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="control">
                                <label for="other">
                                    <input type="checkbox" class="" v-model="language.other" :value="true" id="other" name="language">
                                    <span>Autre</span>
                                    <input  type="text" v-model="language.other" v-if="language.other === true" name="language" placeholder="Quel autre langue ?" v-validate="'required'" class="input is-inline">
                                </label>
                            </div>
                            <div class="control">
                                <label for="advancedOther">
                                    <input type="radio" id="advancedOther" v-model="language.languageLevel.other" value="advancedOther">
                                    <span>Avancé</span>
                                </label>
                            </div>
                            <div class="control">
                                <label for="intermediaryOther">
                                    <input type="radio" id="intermediaryOther" v-model="language.languageLevel.other" value="intermediaryOther">
                                    <span>Intermedière</span>
                                </label>
                            </div>
                            <div class="control">
                                <label for="beginningOther">
                                    <input type="radio" id="beginningOther" v-model="language.languageLevel.other" value="beginningOther">
                                    <span>Débutant.e </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" v-if="language.english === true">
                    <h2>Expliquez-nous en anglais vos motivations pour participer à notre formation. *</h2>
                    <textarea name="english" id="" cols="30" rows="10" class="materialize-textarea"></textarea>
                </div>
            </form>
        </div>
    </div>
</template>
<style scoped>
.field, .row {
    text-align: left
}
h2 {
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase
}
h1 {
    font-size: 25px;
    font-weight: bold;
    text-transform: uppercase
}
.field {
    margin-top: 20px !important
}
.error {
    text-align: left;
    color: red;
}
</style>