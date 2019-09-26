<script>
import BaseButton from '@/components/elements/Button.vue'

export default {
    components: {
        BaseButton
    },
    data() {
        return {
            regexName: /^[A-Za-zÀ-ÖØ-öø-ÿ]+(([' -][A-Za-zÀ-ÖØ-öø-ÿ ])?[A-Za-zÀ-ÖØ-öø-ÿ]*)*$/,
            contact: {
                first_name:'',
                last_name: '',
                email:'',
                message:''
            }
        }
    },
    methods: {
        submit() {
            this.$validator.validateAll().then(result => {
                if (!result) return
            })
        }
   }
}
</script>
<template>
    <form v-on:submit.prevent v-on:submit="submit">
        <h2>Contact</h2>
        <div class="row">
            <div class="input-field col s6">
                <input 
                    name="first_name"
                    id="first_name" 
                    type="text"
                    v-model="contact.first_name" 
                    v-validate="{ required: true, regex: regexName}"
                    :class="{invalid: errors.has('first_name')}">
                <label for="prenom">Prénom</label>
                <span class="helper-text" data-error="Ce champs ext obligatoire"></span>
            </div>
            <div class="input-field col s6">
                <input 
                    name="lastname"
                    id="lastname" 
                    type="text" 
                    v-model="contact.lastname" 
                    v-validate="{ required: true, regex: regexName}"
                    :class="{invalid: errors.has('lastname')}">
                <label for="nom">Nom</label>
                <span class="helper-text" data-error="Ce champs ext obligatoire"></span>
            </div>
            <div class="input-field col s12">
                <input 
                    name="email"
                    id="email" 
                    type="email" 
                    v-model="contact.email" 
                    v-validate="'required|email'"
                    :class="{invalid: errors.has('email')}">
                <label for="email">E-mail</label>
                <span class="helper-text" data-error="Ce champs ext obligatoire"></span>
            </div>
            <div class="input-field col s12">
                <textarea 
                    name="message"
                    id="message" 
                    class="materialize-textarea"
                    v-model="contact.message" 
                    v-validate="'required'"
                    :class="{invalid: errors.has('message')}"></textarea>
                <label for="textarea1">Votre message</label>
                <span class="helper-text" data-error="Ce champs ext obligatoire"></span>
            </div>
            <BaseButton type="submit">Envoyer</BaseButton>
        </div>
    </form>
</template>
<style scoped>

h2, h3 {
    font-size: 1em;
    text-transform: uppercase;
} 
form {

}
</style>
