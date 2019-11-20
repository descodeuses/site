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
    }
}
</script>
<template>
    <form>
        <Loader v-if="loading"/>
        <h2 class="heading">Recevez notre newsletter</h2>
        <div class="input-field col s12">
            <input 
                id="email" 
                type="email" 
                class="validate"
                v-model="inscription.newletter">
            <label for="email">E-mail</label>
        </div>
        <BaseButton 
            type="submit">
            Envoyer
        </BaseButton>
    </form>
</template>
<style scoped>
</style>
