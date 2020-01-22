<script>
    import Modal from '@/components/elements/Modal.vue'
    import Loader from '@/components/elements/Loader.vue'
    import BaseButton from '@/components/elements/Button.vue'

    export default {
        components: {
            Modal,
            Loader,
            BaseButton,
        },
        data() {
            return {
                loading: false,
                inscription: {}
            }
        },
        methods: {
            submit() {
                this.$axios
                .post('https://admin.descodeuses.org/newsletter/soubscribe', this.inscription)
                .then(res => {
                    this.$refs.modal.open()
                    this.inscription.email = ""
                })
                .catch(err => {
                    this.$refs.errorModal.open()
                    this.inscription.email = ""
                })
            },
            clean() {
                this.inscription.email = ""
            }
        }
    }
</script>
<template>
    <div> 
        <Modal
        :header="'Email enregistré'"
        :subheader="'Merci pour votre confiance'"
        :validate="clean"
        ref="modal"
        />
        <Modal
        :header="'Une erreur est survenue'"
        :subheader="'Veuillez réessayer plus tard.'"
        ref="errorModal"
        />

        <form @submit="submit" action="javascript:void(0);">
            <Loader v-if="loading"/>
            <h2 class="heading">Recevez notre newsletter</h2>
            <div class="input-field col s12">
                <input 
                id="email" 
                type="email" 
                class="validate"
                name="email"
                v-model="inscription.email">
                <label for="email">E-mail</label>
            </div>
            <BaseButton 
            type="submit">
            Envoyer
        </BaseButton>
    </form>

</div>

</template>
<style scoped>
</style>
