<script>
export default {
    data() {
        return {
            inscription: {}
        }
    }
}
</script>
<template>
    <form>
        <h2 class="heading">Recevez notre newsletter</h2>
        <div class="input-field col s12">
            <input 
                id="email" 
                type="email" 
                class="validate"
                v-model="inscription.newletter">
            <label for="email">E-mail</label>
        </div>
        <button class="waves-effect waves-light btn"
        type="submit">Envoyer</button>
    </form>
</template>
<style scoped>
</style>
